<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/v1/hospitals', function (Request $request) {return 'From the server: details of a hospital';});

//Route::get('/v1/hospitals', function (Request $request) {return response()->json([ 'kenyatta'=> [ 'registration'=> 'ABC001', 'dateRegistered'=> '2019-01-01', 'color'=> 'black', 'make'=> 'tesla', 'model'=> 's']], 200);});

Route::get('/v1/hospitals', [HospitalController::class, 'get']);
