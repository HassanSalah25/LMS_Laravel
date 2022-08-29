<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\AuthController;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\AdminsController;
use App\Http\Controllers\API\BatchsController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\CerticationsController;
use App\Http\Controllers\API\FeedbacksController;
use App\Http\Controllers\API\LessonsController;
use App\Http\Controllers\API\ModulesController;
use App\Http\Controllers\API\StaffsController;
use App\Http\Controllers\API\StudentsController;
use App\Http\Controllers\API\UsersController;
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

//all routes / api here must be api authenticated
Route::group(['middleware' => ['api'], 'namespace' => 'Api'], function () {

    Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){

        Route::post('login', [AuthController::class,'login']);

        Route::group(['prefix' => 'admin'],function (){

            Route::post('show', [AdminsController::class,'index']);
            Route::post('store', [AdminsController::class,'store']);
            Route::post('update', [AdminsController::class,'update']);
            Route::post('destroy', [AdminsController::class,'destroy']);

        });

        Route::group(['prefix' => 'course'],function (){

            Route::post('show', [CourseController::class,'index']);
            Route::post('store', [CourseController::class,'store']);
            Route::post('update', [CourseController::class,'update']);
            Route::post('destroy', [CourseController::class,'destroy']);

        });

        Route::group(['prefix' => 'batch'],function (){
            Route::post('show', [BatchsController::class,'index']);
            Route::post('store', [BatchsController::class,'store']);
            Route::post('update', [BatchsController::class,'update']);
            Route::post('destroy', [BatchsController::class,'destroy']);
        });

        Route::group(['prefix' => 'category'],function (){
            Route::post('show', [CategoriesController::class,'index']);
            Route::post('store', [CategoriesController::class,'store']);
            Route::post('update', [CategoriesController::class,'update']);
            Route::post('destroy', [CategoriesController::class,'destroy']);
        });

        Route::group(['prefix' => 'certification'],function (){
            Route::post('show', [CerticationsController::class,'index']);
            Route::post('store', [CerticationsController::class,'store']);
            Route::post('update', [CerticationsController::class,'update']);
            Route::post('destroy', [CerticationsController::class,'destroy']);
        });

        Route::group(['prefix' => 'feedback'],function (){
            Route::post('show', [FeedbacksController::class,'index']);
            Route::post('store', [FeedbacksController::class,'store']);
            Route::post('update', [FeedbacksController::class,'update']);
            Route::post('destroy', [FeedbacksController::class,'destroy']);
        });

        Route::group(['prefix' => 'lesson'],function (){
            Route::post('show', [LessonsController::class,'index']);
            Route::post('store', [LessonsController::class,'store']);
            Route::post('update', [LessonsController::class,'update']);
            Route::post('destroy', [LessonsController::class,'destroy']);
        });

        Route::group(['prefix' => 'module'],function (){
            Route::post('show', [ModulesController::class,'index']);
            Route::post('store', [ModulesController::class,'store']);
            Route::post('update', [ModulesController::class,'update']);
            Route::post('destroy', [ModulesController::class,'destroy']);
        });

        Route::group(['prefix' => 'staff'],function (){
            Route::post('show', [StaffsController::class,'index']);
            Route::post('store', [StaffsController::class,'store']);
            Route::post('update', [StaffsController::class,'update']);
            Route::post('destroy', [StaffsController::class,'destroy']);
        });

        Route::group(['prefix' => 'student'],function (){
            Route::post('show', [StudentsController::class,'index']);
            Route::post('store', [StudentsController::class,'store']);
            Route::post('update', [StudentsController::class,'update']);
            Route::post('destroy', [StudentsController::class,'destroy']);
        });

        Route::group(['prefix' => 'user'],function (){
            Route::post('show', [UsersController::class,'index']);
            Route::post('store', [UsersController::class,'store']);
            Route::post('update', [UsersController::class,'update']);
            Route::post('destroy', [UsersController::class,'destroy']);
        });
    });

    Route::post('logout',[AuthController::class,'logout']) -> middleware(['auth.guard:admin-api']);

    Route::group(['prefix' => 'user','namespace'=>'User'],function (){

        Route::post('login','App\Http\Controllers\API\User\AuthController@login');

        Route::group(['prefix' => 'course'],function (){

            Route::post('show', [CourseController::class,'index']);

        });

        Route::group(['prefix' => 'batch'],function (){
            Route::post('show', [BatchsController::class,'index']);
        });

        Route::group(['prefix' => 'category'],function (){
            Route::post('show', [CategoriesController::class,'index']);
        });

        Route::group(['prefix' => 'certification'],function (){
            Route::post('show', [CerticationsController::class,'index']);
        });

        Route::group(['prefix' => 'feedback'],function (){
            Route::post('show', [FeedbacksController::class,'index']);
        });

        Route::group(['prefix' => 'lesson'],function (){
            Route::post('show', [LessonsController::class,'index']);
        });

        Route::group(['prefix' => 'module'],function (){
            Route::post('show', [ModulesController::class,'index']);
        });

        Route::group(['prefix' => 'staff'],function (){
            Route::post('show', [StaffsController::class,'index']);
        });

        Route::group(['prefix' => 'student'],function (){
            Route::post('show', [StudentsController::class,'index']);
        });

        Route::group(['prefix' => 'user'],function (){
            Route::post('show', [UsersController::class,'index']);
        });

        Route::post('logout','App\Http\Controllers\API\User\AuthController@logout') -> middleware(['auth.guard:user-api']);
    });
});


