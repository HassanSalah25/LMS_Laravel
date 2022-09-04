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



;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;  //////   /api/.....
//basic api request with no JWT or Auth middleware!

//Route::get('course', [CourseController::class,'index']) ;



//middlware is just a rule not a uri paramter
        //namespace is the calling name
Route::group(
    ['middleware' => ['api','checkPassword'],//add other middlewares
    'namespace' => 'Api'],
                            function () {
                                //prefix is the route name
                                Route::group([
                                    'prefix' => 'admin',
                                    'namespace' => 'Admin'],
                                    function () {
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;  //////   /api/admin/.....
                                        Route::post('login', [AuthController::class, 'login']);
                                        // AssignGauard == auth.guard
                                        // admin-api as parameter to Assign Gaurd
                                        Route::post('logout', [AuthController::class, 'logout'])->middleware(['auth.guard:admin-api']);
                                        Route::group(['prefix' => 'course'], function () {

                                            Route::post('show', [CourseController::class, 'index'])->middleware('auth.guard:admin-api');

                                        });

                                            //Extends
                                        Route::group(
                                                ['prefix' => 'user',
                                                    'namespace' => 'User',
                                            //  'middleware' => ['auth.guard:admin-api'],
                                                ], function () {
                                            ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;  //////   /api/admin/user/.....

                                            //Route::posts('login','App\Http\Controllers\API\User\AuthController@login');

                                            Route::group(['prefix' => 'course'], function () {

                                                Route::post('show', [CourseController::class, 'index']);

                                            });

                                            Route::group(['prefix' => 'batch'], function () {
                                                Route::post('show', [BatchsController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'category'], function () {
                                                Route::post('show', [CategoriesController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'certification'], function () {
                                                Route::post('show', [CerticationsController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'feedback'], function () {
                                                Route::post('show', [FeedbacksController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'lesson'], function () {
                                                Route::post('show', [LessonsController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'module'], function () {
                                                Route::post('show', [ModulesController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'staff'], function () {
                                                Route::post('show', [StaffsController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'student'], function () {
                                                Route::post('show', [StudentsController::class, 'index']);
                                            });

                                            Route::group(['prefix' => 'user'], function () {
                                                Route::post('show', [UsersController::class, 'index']);
                                            });

                                        })//->middleware(['auth.guard:admin-api'])
                                        ;
                                    });
                            });


