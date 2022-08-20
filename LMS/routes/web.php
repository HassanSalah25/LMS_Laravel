<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
   // return view('Maindashboard/index');
    return \File::get(public_path() . '/SPAindex.html');

})->middleware(['auth'])->name('dashboard');


// admin CRUD
Route::get('/admins', [AdminController::class, 'index'])->name('Admins');
Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create');
Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit');
Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update');
Route::post('/admins/delete/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy');
Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store');

require __DIR__.'/auth.php';
