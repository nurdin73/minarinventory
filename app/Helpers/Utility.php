<?php
/*=========================================================================================
    App Name: Monitoring Eksekusi PTUN Jakarta
    File Name: Utility Helper
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

use App\View\Components\ButtonDropdown;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

if(!function_exists('formatSizeUnits')) {
    function formatSizeUnits($bytes) {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2).' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2).' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2).' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes.' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes.' byte';
        } else {
            $bytes = '0 bytes';
        }
    
        return $bytes;
    }
}

if(!function_exists('explodeDate')) {
    function explodeDate($date) {
        $dateBefore = explode('/', $date);
        $d = $dateBefore[0];
        $m = $dateBefore[1];
        $y = $dateBefore[2];
        return $y.'-'.$m.'-'.$d;
    }
}

if(!function_exists('explodeDateTime')) {
    function explodeDateTime($date) {
        $tgl = explodeDate($date);
        return $tgl.' '.getTodayOnlyTime();
    }
}

if(!function_exists('getRoman')) {
    function getRoman($month) {
        switch ($month){
            case 1: 
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }
}

if(!function_exists('getMaxValue')) {
    function getMaxValue($x, $y) {
        $max = $x;
        if($y > $max) {
            $max = $y;
        }
        return $max;
    }
}

if(!function_exists('getColor')) {
    function getColor($data) {
        for ($i=0; $i<=count($data); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        return $colours;
    }
}

if(!function_exists('dateValidation')) {
    function dateValidation($date) {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            return true;
        } else {
            return false;
        }
    }
}

if(!function_exists('capitalString')) {
    function capitalString($string) {
        return ucwords(strtolower($string));
    }
}

if(!function_exists('moneyRupiah')) {
    function moneyRupiah($value) {
        return 'Rp. '.number_format($value, 0,",", ".");
    }
}

if(!function_exists('moneyPronounce')) {
    function moneyPronounce($value) {
        $value = abs($value);
        $numbers = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
        $sentences = "";
        if($value < 12) {
            $sentences = " ". $numbers[$value];
        } elseif($value < 20) {
            $sentences = moneyPronounce($value - 10). " belas";
        } elseif($value < 100) {
            $sentences = moneyPronounce($value/10). " puluh". moneyPronounce($value % 10);
        } elseif($value < 200) {
            $sentences = " seratus". moneyPronounce($value - 100);
        } elseif($value < 1000) {
            $sentences = moneyPronounce($value/100) . " ratus". moneyPronounce($value % 100);
        } elseif($value < 2000) {
            $sentences = " seribu". moneyPronounce($value - 1000);
        } elseif($value < 1000000) {
            $sentences = moneyPronounce($value/1000). " ribu".moneyPronounce($value % 1000);
        } elseif($value < 1000000000) {
            $sentences = moneyPronounce($value/1000000). " juta". moneyPronounce($value % 1000000);
        } elseif($value < 1000000000000) {
            $sentences = moneyPronounce($value/1000000000). " milyar". moneyPronounce(fmod($value, 1000000000));
        } elseif($value < 1000000000000000) {
            $sentences = moneyPronounce($value/1000000000000). " triliyun". moneyPronounce(fmod($value, 1000000000000));
        }
        return $sentences;
    }
}

if(!function_exists('trimMoney')) {
    function trimMoney($value) {
       return ($value < 0) ? 'minus '. trim(moneyPronounce($value)) : trim(moneyPronounce($value). ' rupiah');
    }
}

if(!function_exists('checkPermission')) {
    function checkPermission($permission) {
        if(auth()->check()) {
            $role = Role::find(auth()->user()->role_id);
            if(!$role->hasPermissionTo($permission)) {
                return abort(401);
            }
            return true;
        }
    }
}

if(!function_exists('staffPermission')) {
    function staffPermission($pages, $action) {
        if($pages == 'judge' || $pages == 'highjudge' || $pages == 'judicialjudge' || $pages == 'leader') {
            checkPermission('staffhakim-'.$action);
        } elseif($pages == 'firstclerk' || $pages == 'appealclerk' || $pages == 'firstsubstituteclerk' || $pages == 'appealsubstituteclerk') {
            checkPermission('staffpanitera-'.$action);
        } elseif($pages == 'bailiff') {
            checkPermission('staffjurusita-'.$action);
        } elseif($pages == 'judgecandidate') {
            checkPermission('staffcakim-'.$action);
        } elseif($pages == 'nonpalu') {
            checkPermission('staffnonpalu-'.$action);
        } else {
            checkPermission('nonactive-'.$action);
        }
    }
}

if(!function_exists('bladePermission')) {
    function bladePermission($permission) {
        $role = Role::findOrFail(Auth::guard('admin')->user()->role_id);
        if ($role->hasPermissionTo($permission)) {
            return true;
        } else {
            return false;
        }
    }
}

if(!function_exists('staffSegment')) {
    function staffSegment() {
        return request()->segment(count(request()->segments()));
    }
}

if(!function_exists('deleteDot')) {
    function deleteDot($money) {
        $money = str_replace(".", "", $money);
        $money = (int)$money;
        return $money;
    }
}

if(!function_exists('assetVersion')) {
    function assetVersion($path, $secure = null) {
        $timestamp = @filemtime(public_path($path)) ?: 0;
        return asset($path, $secure). '?' .$timestamp;
    }
}

if(!function_exists('filterString')) {
    function filterString($value){
        $string = strip_tags($value);        
        $string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);        
        return htmlspecialchars(trim($string), ENT_QUOTES, "UTF-8");
    }
}

if(!function_exists('sanitize')) {
    function sanitize($value, $type = 'string', $options = array()) {
        if($type === 'string') {
            return filterString($value);
        } elseif($type === 'email') {
            $sanitizedEmail = filter_var($value, FILTER_SANITIZE_EMAIL);
            if($value == $sanitizedEmail && filter_var($value, FILTER_VALIDATE_EMAIL)) {
                return $value;
            }
        } elseif($type === 'url') {
            return filter_var($value, FILTER_SANITIZE_URL);
        } elseif($type === 'INT') {
            return filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        } else {
            return filterString($value);
        }
    }
}

if(!function_exists('writeAppLog')) {
    function writeAppLog($message, $type = 'notice', $channel = 'applog') {
        Log::channel($channel)->{$type}($message);
    }
}

if(!function_exists('breadcrumb')) {
    function breadcrumb(array $data): array
    {
        $breadcrumb = 
        [
            [
                'link' => route(auth()->user()->role->startup_page),
                'page' => __('lang.home'),
            ]
        ];

        return array_merge($breadcrumb, $data);
    }
}

if(!function_exists('generateActionDropdown')) {
    function generateActionDropdown(array $data)
    {
        if(!is_array($data)) return false;
        
        return Blade::renderComponent(new ButtonDropdown($data));
    }
}

if(!function_exists('encryptString')) {
    function encryptString($string)
    {
        $output = false;

        $secret_key = config('eksekusi.encrypt.key');
        $secret_iv = config('eksekusi.encrypt.iv');
        $encrypt_method = config('eksekusi.encrypt.encryption_mechanism');

        $key = hash("sha256", $secret_key);
        $iv = substr(hash("sha256", $secret_iv), 0, 16);

        $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($result);
        return $output;
    }
}

if(!function_exists('decryptString')) {
    function decryptString($string)
    {
        $output = false;

        $secret_key = config('eksekusi.encrypt.key');
        $secret_iv = config('eksekusi.encrypt.iv');
        $encrypt_method = config('eksekusi.encrypt.encryption_mechanism');

        $key = hash("sha256", $secret_key);
        $iv = substr(hash("sha256", $secret_iv), 0, 16);

        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        return $output;
    }
}

if(!function_exists('censorNumber')) {
    function censorNumber($number, $length = -3)
    {
        return substr_replace($number, "xxx", $length);
    }
}

if(!function_exists('convertFileSize')) {
    function convertFileSize($size, $unit = 'KB')
    {
        switch ($unit){
            case "KB": 
                return round($size / 1024,4);
                break;
            case "MB":
                return round($size / 1024 / 1024,4);
                break;
            case "GB":
                return round($size / 1024 / 1024 / 1024,4);
                break;
            default :
                return round($size / 1024,4);
        }
    }
}

if (!function_exists('leadingZero')) {
    function leadingZero($number, $length = 2)
    {
        return str_pad($number, $length, '0', STR_PAD_LEFT);
    }
}

if(!function_exists('getSetting')) {
    function getSetting($name)
    {
        return DB::table('settings')->where('name', $name)->first()->value;
    }
}

if(!function_exists('getBiaya')) {
    function getBiaya($name)
    {
        return DB::table('master_biaya')->where('name', $name)->first()->value;
    }
}

if(!function_exists('getUploadPath')) {
    function getUploadPath()
    {
        if(auth()->check()) {
            return 'public/' . config('eksekusi.upload_path') . auth()->id() . '/';
        }
        
        return null;
    }
}

if(!function_exists('fileAsset')) {
    function fileAsset($file) 
    {
        if(auth()->check()) {
            return asset('storage/' . config('eksekusi.upload_path') . auth()->id() . '/' . $file);
        }

        return null;
    }
}