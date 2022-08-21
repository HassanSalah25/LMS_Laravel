<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
 use App\Http\Controllers\StudentController;
 use App\Http\Controllers\CoursesController;
 use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {//NewDesign
    return view('admin1', [
        'admins' => Admin::Paginate(5)
    ]);
});


Route::get('/dashboard', function () {
   return view('Maindashboard/index');
   // return \File::get(public_path() . '/SPAindex.html');

 })->middleware(['auth'])->name('dashboard');


// admin CRUD
     //closure function
//    Route::get('/admins', [AdminController::class, 'index'])->name('Admins')->middleware('auth');
//    Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create')->middleware('auth');
//    Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit')->middleware('auth');
//    Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update')->middleware('auth');
//    Route::post('/admins/destroy/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy')->middleware('auth');
//    Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store')->middleware('auth');



// admin CRUD
Route::group(function ()    {[   //closure function
    Route::get('/admins', [AdminController::class, 'index'])->name('Admins')
 ,   Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create')
  ,  Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit')
   , Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update')
    ,Route::post('/admins/destroy/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy')
    ,Route::post('/admins/create', [AdminController::class, 'store'])->name('Admins.store')
];
})->middleware('auth');


// Student CRUD
Route::get('/students', [StudentController::class, 'index'])->name('Students')->middleware('auth');
Route::get('/students/create', [StudentController::class, 'create'])->name('Students.create')->middleware('auth');
Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('Students.edit')->middleware('auth');
Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('Students.update')->middleware('auth');
Route::post('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('Students.destroy')->middleware('auth');
Route::post('/students/create', [StudentController::class, 'store'])->name('Students.store')->middleware('auth');

// Staff CRUD
Route::get('/staffs', [StaffController::class, 'index'])->name('Staffs')->middleware('auth');
Route::get('/staffs/create', [StaffController::class, 'create'])->name('Staffs.create')->middleware('auth');
Route::get('/staffs/edit/{student}', [StaffController::class, 'edit'])->name('Staffs.edit')->middleware('auth');
Route::post('/staffs/update/{id}', [StaffController::class, 'update'])->name('Staffs.update')->middleware('auth');
Route::post('/staffs/destroy/{id}', [StaffController::class, 'destroy'])->name('Staffs.destroy')->middleware('auth');
Route::post('/staffs/create', [StaffController::class, 'store'])->name('Staffs.store')->middleware('auth');

// course CRUD
Route::get('/courses', [CoursesController::class, 'index'])->name('courses')->middleware('auth');
Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create')->middleware('auth');
Route::get('/courses/edit/{course}', [CoursesController::class, 'edit'])->name('courses.edit')->middleware('auth');
Route::post('/courses/update/{id}', [CoursesController::class, 'update'])->name('courses.update')->middleware('auth');
Route::post('/courses/destroy/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy')->middleware('auth');
Route::post('/courses/create', [CoursesController::class, 'store'])->name('courses.store')->middleware('auth');

require __DIR__.'/auth.php';
