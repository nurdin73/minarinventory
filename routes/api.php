<?php

use App\Http\Controllers\LocationApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'location'], function () {
    Route::get('/provinces', [LocationApiController::class, 'provinces']);
    Route::get('/cities/{province_id}', [LocationApiController::class, 'cities']);
    Route::get('/districts/{city_id}', [LocationApiController::class, 'districts']);
    Route::get('/subdistricts/{district_id}', [LocationApiController::class, 'subdistricts']);
    Route::get('/postalcodes/{prov_id}/{city_id}/{dis_id}/{subdis_id}', [LocationApiController::class, 'postalcodes']);
});
