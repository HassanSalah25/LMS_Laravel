<?php

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

Route::get('course/',[\App\Http\Controllers\API\CourseController::class ,'index']);
