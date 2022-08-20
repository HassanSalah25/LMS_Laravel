<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins', function () {
    return view('admin', [
        'admins' => Admin::Paginate(5)
    ]);
});
Route::get('/admin', function () {//NewDesign 
    return view('admin1', [
        'admins' => Admin::Paginate(5)
    ]);
});

// Route::get('/dashboard', function () {
//    // return view('Maindashboard/index');
//     return \File::get(public_path() . '/SPAindex.html');

// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
