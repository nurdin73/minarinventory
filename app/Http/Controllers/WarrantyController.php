<?php
/*=========================================================================================
    App Name: Inventory Management System
    File Name: WarrantyController
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WarrantyController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function postWarranty(Request $request)
    {
        $attr = $this->validate($request, [
            'serial_number' => 'required',
            'part_number' => 'required',
            'purchase_date' => 'required|date',
            'receipt_file' => 'nullable|file|mimes:png,jpg,pdf|max:2048'
        ]);

        $attr['user_id'] = auth()->id();
        if ($request->hasFile('receipt_file')) {
            $file = $request->file('receipt_file');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file = file_get_contents($file);
            $path = "warranty/$filename";
            if (Storage::put($path, $file, 'public')) {
                $attr['receipt_file'] = $path;
            }
        }

        $create = Warranty::create($attr);
        return redirect()->back()->with('success', "Create warranty $create->serial_number Success");
    }
}
