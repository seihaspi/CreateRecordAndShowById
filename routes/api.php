<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response as FacadeResponse;
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

// Route::get('users',function(){
//     return response()->json(["data"=> ['name'=>'seiha',]],200);

// });

//Route::get('users',PersonController::class,'index');
//Route::get('users',PersonController::class,'index');
 Route::get('people','App\Http\Controllers\PersonController@index');
 Route::post('people','App\Http\Controllers\PersonController@store');
 Route::get('person/{id}','App\Http\Controllers\PersonController@show');

