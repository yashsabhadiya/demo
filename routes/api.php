<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::group(['middleware' => 'auth','prefix' => 'auth'], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('register',[UserController::class,'register']);
// Route::post('login',[UserController::class,'login']);

Route::group(['middleware' => 'auth:api'],function(){
	Route::post('data',[UserController::class,'data']);
});
