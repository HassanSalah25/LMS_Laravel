<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;

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
Route::post('/admins/delete/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy')->middleware('auth');
Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store')->middleware('auth');


// Student CRUD
Route::get('/students', [StudentController::class, 'index'])->name('Students')->middleware('auth');
Route::get('/students/create', [StudentController::class, 'create'])->name('Students.create')->middleware('auth');
Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('Students.edit')->middleware('auth');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('Students.update')->middleware('auth');
Route::post('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('Students.destroy')->middleware('auth');
Route::post('/students/create', [StudentController::class, 'store'])->name('Students.store')->middleware('auth');

// Staff CRUD
Route::get('/staffs', [StudentController::class, 'index'])->name('Staffs')->middleware('auth');
Route::get('/staffs/create', [StudentController::class, 'create'])->name('Staffs.create')->middleware('auth');
Route::get('/staffs/edit/{student}', [StudentController::class, 'edit'])->name('Staffs.edit')->middleware('auth');
Route::post('/staffs/update/{id}', [StudentController::class, 'update'])->name('Staffs.update')->middleware('auth');
Route::post('/staffs/destroy/{id}', [StudentController::class, 'destroy'])->name('Staffs.destroy')->middleware('auth');
Route::post('/staffs/create', [StudentController::class, 'store'])->name('Staffs.store')->middleware('auth');

require __DIR__.'/auth.php';
