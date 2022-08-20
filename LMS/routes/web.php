<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;

Route::get('/', function () {
    return view('welcome');
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


// admin CRUD
Route::get('/admins', [AdminController::class, 'index'])->name('Admins')->middleware('auth');
Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create')->middleware('auth');
Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit')->middleware('auth');
Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update')->middleware('auth');
Route::post('/admins/destroy/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy')->middleware('auth');
Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store')->middleware('auth');

// course CRUD
Route::get('/courses', [CoursesController::class, 'index'])->name('courses')->middleware('auth');
Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create')->middleware('auth');
Route::get('/courses/edit/{course}', [CoursesController::class, 'edit'])->name('courses.edit')->middleware('auth');
Route::post('/courses/update/{id}', [CoursesController::class, 'update'])->name('courses.update')->middleware('auth');
Route::post('/courses/destroy/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy')->middleware('auth');
Route::post('/courses/create', [CoursesController::class, 'store'])->name('courses.store')->middleware('auth');

require __DIR__.'/auth.php';
