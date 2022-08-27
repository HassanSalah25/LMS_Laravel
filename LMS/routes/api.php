<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\AuthController;
use \App\Http\Controllers\API\CourseController;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Contracts\Auth\Guard;
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


    ///old auth way for api service
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//        download Snatcum package api tokens new Auth way


//Route::get('course/',function (){
//    return [
//        'id' => '1',
//        'name' => 'DS',
//    ];
//});

//all routes / api here must be api authenticated
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function () {


    Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){
        Route::post('login', [AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout']);
        Route::post('course', [CourseController::class,'index'])->middleware(['auth.guards:admin-api']);
    });

    Route::group(['prefix' => 'user','namespace'=>'User'],function (){
        Route::post('login','App\Http\Controllers\API\User\UserController@login') ;
        Route::post('logout','App\Http\Controllers\API\User\UserController@logout') -> middleware(['auth.guard:user-api']);
    });

    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'],function (){
        Route::post('profile',function(){
            return  \Auth::user(); // return authenticated user data
        }) ;
    });
});
