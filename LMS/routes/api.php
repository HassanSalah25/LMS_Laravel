<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\AuthController;
use \App\Http\Controllers\API\CourseController;
use Tymon\JWTAuth\Facades\JWTAuth;
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

//        download Snatcum package api tokens new Auth way

//all routes / api here must be api authenticated

//
//    Route::get(
//
//
//    )


Route::get('course', [CourseController::class,'index']) ;

















Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function () {

        // prefix :
    Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){
        Route::post('login', [AuthController::class,'login']);
        Route::post('logout',[AuthController::class,'logout']) -> middleware(['auth.guard:admin-api']);
        Route::post('course', [CourseController::class,'index']) -> middleware(['auth.guard:admin-api']);
    });

    Route::group(['prefix' => 'user','namespace'=>'User'],function (){
        Route::post('login','App\Http\Controllers\API\User\UserController@login') -> middleware(['auth.guard:user-api']);
        Route::post('logout','App\Http\Controllers\API\User\UserController@logout') -> middleware(['auth.guard:user-api']);
    });

    Route::group(['prefix' => 'user' ,'middleware' => 'auth.guard:user-api'],function (){
        Route::post('profile',function(){
            return  \Auth::user(); // return authenticated user data
        }) ;
    });
});
