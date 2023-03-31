<?php
/*=========================================================================================
    App Name: Inventory Management System
    File Name: Warranty
    --------------------------------------------------------------------------------------
    Author: R. Idham Aziz Marlin, S.Kom
    Email: idhamaziz390@gmail.com
==========================================================================================*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    use HasFactory;

    protected $table = 'warranty';
    protected $fillable = ['serial_number', 'part_number', 'purchase_date', 'receipt_file', 'user_id'];
}
