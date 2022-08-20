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

<<<<<<< HEAD
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
=======
Route::get('/dashboard', function () {
   // return view('Maindashboard/index');
    return \File::get(public_path() . '/SPAindex.html');
>>>>>>> 95ff3888abbfe766ff73b1a4b92c5709f004a275

// Route::get('/dashboard', function () {
//    // return view('Maindashboard/index');
//     return \File::get(public_path() . '/SPAindex.html');

<<<<<<< HEAD
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
=======

// admin CRUD
Route::get('/admins', [AdminController::class, 'index'])->name('Admins');
Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create');
Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit');
Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update');
Route::post('/admins/delete/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy');
Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store');

require __DIR__.'/auth.php';
>>>>>>> 95ff3888abbfe766ff73b1a4b92c5709f004a275
