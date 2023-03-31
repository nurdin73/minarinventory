<?php
/*=========================================================================================
    App Name: Inventory Management System
    File Name: LocationApiController
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationApiController extends Controller
{
    public function provinces(Request $request)
    {
        $search = $request->search ?? '';
        $results = DB::table('provinces')->select(['prov_id as id', 'prov_name as name']);
        if ($search != '') {
            $results = $results->where('prov_name', 'like', "%$search%");
        }
        $results = $results->orderBy('prov_name', 'asc')->get();
        return $results;
    }

    public function cities(Request $request, $province_id)
    {
        $search = $request->search ?? '';
        // $limit = $request->limit ?? 10;
        $results = DB::table('cities')->select(['city_id as id', 'city_name as name'])->where('prov_id', $province_id);
        if ($search != '') {
            $results = $results->where('city_name', 'like', "%$search%");
        }
        $results = $results->orderBy('city_name', 'asc')->get();
        return $results;
    }

    public function districts(Request $request, $city_id)
    {
        $search = $request->search ?? '';
        // $limit = $request->limit ?? 10;
        $results = DB::table('districts')->select(['dis_id as id', 'dis_name as name'])->where('city_id', $city_id);
        if ($search != '') {
            $results = $results->where('dis_name', 'like', "%$search%");
        }
        $results = $results->orderBy('dis_name', 'asc')->get();
        return $results;
    }

    public function subdistricts(Request $request, $district_id)
    {
        $search = $request->search ?? '';
        // $limit = $request->limit ?? 10;
        $results = DB::table('subdistricts')->select(['subdis_id as id', 'subdis_name as name'])->where('dis_id', $district_id);
        if ($search != '') {
            $results = $results->where('subdis_name', 'like', "%$search%");
        }
        $results = $results->orderBy('subdis_name', 'asc')->get();
        return $results;
    }

    public function postalcodes($prov_id, $city_id, $dis_id, $subdis_id)
    {
        $search = request()->search ?? '';
        $results = DB::table('postalcode')->select(['postal_id as id', 'postal_code'])->where([
            'prov_id' => $prov_id,
            'city_id' => $city_id,
            'dis_id' => $dis_id,
            'subdis_id' => $subdis_id
        ]);
        if ($search != '') {
            $results = $results->where('postal_code', 'like', "%$search%");
        }
        $results = $results->orderBy('postal_code', 'asc')->get();
        return $results;
    }
}
