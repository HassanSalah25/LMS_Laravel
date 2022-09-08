<?php

use Illuminate\Support\Facades\Route;
//use App\Models\Admin;
use App\Http\Controllers\AdminController;
 use App\Http\Controllers\StudentController;
 use App\Http\Controllers\CoursesController;
 use App\Http\Controllers\StaffController;
use App\Http\Controllers\PostController;







/////////////////
Route::group(
    ['middleware' => ['auth'],//add other middlewares
    'namespace' => 'posts',
    'prefix' => 'posts-list'],
    function () {
//add prefix
//posts route
Route::get('/', [PostController::class, 'postList'])->name('posts.list');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/create',[PostController::class,'create'])->name('posts.index'); //shows create post form
Route::post('/create/post', [PostController::class, 'store'])->name('posts.add'); //saves the created post to the databse
Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit'); //shows edit post form
Route::post('/edit/{id}', [PostController::class, 'update']); //commits edited post to the database
Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete'); //deletes post from the database
///////////////////////////////////////////////////////////////////
Route::post('/like-posts/{id}', [PostController::class, 'likePost'])->name('like.posts');
Route::post('/unlike-posts/{id}', [PostController::class, 'unlikePost'])->name('unlike.posts');

});

Route::get('/', function () {
    return view('welcome');
    // return view('Home/index');
    //return view('Maindashboard/index');
    // return  ' HOlaa ! <h2> <a href="/dashboard"> </h2>';

});





///////////////////////DASHboard
    Route::group(
        ['middleware' => ['auth'],//add other middlewares
            'namespace' => 'dashboard',
            'prefix' => 'dashboard'],
        function () {
//add prefix
//posts route
            Route::get('/index', function (){
                return view("/dashboard/index");
            });
            Route::get('/index2', function (){
                return view("/dashboard/index2");
            });
            Route::get('/index3', function (){
                return view("/dashboard/index3");
            });
//            Route::get('/index1', [PostController::class, 'show'])->name('posts.show');
//            Route::get('/create',[PostController::class,'create'])->name('posts.index'); //shows create post form
//            Route::post('/create/post', [PostController::class, 'store'])->name('posts.add'); //saves the created post to the databse
//            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('posts.edit'); //shows edit post form
//            Route::post('/edit/{id}', [PostController::class, 'update']); //commits edited post to the database
//            Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('posts.delete'); //deletes post from the database
/////////////////////////////////////////////////////////////////////
//            Route::post('/like-posts/{id}', [PostController::class, 'likePost'])->name('like.posts');
//            Route::post('/unlike-posts/{id}', [PostController::class, 'unlikePost'])->name('unlike.posts');

        });



//Route::middleware('auth')->group(function () {
//
//    Route::get('/user',[]
////        return view('Pages/UserProfile');
//
//
//});

Route::get('/market', function () {
    return view('Pages/market');


});

Route::middleware('auth')->group(function (){
    Route::get('/contact-us', [\App\Http\Controllers\FeedbackController::class, 'index'])->name('Contact-Us');
    Route::get('/contact-us/create', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('Contact-Us.create');
    Route::get('/contact-us/edit/{admin}', [\App\Http\Controllers\FeedbackController::class, 'edit'])->name('Contact-Us.edit');
    Route::post('/contact-us/update/{id}', [\App\Http\Controllers\FeedbackController::class, 'update'])->name('Contact-Us.update');
    Route::post('/contact-us/destroy/{id}', [\App\Http\Controllers\FeedbackController::class, 'destroy'])->name('Contact-Us.destroy');
    Route::post('/contact-us/store', [\App\Http\Controllers\FeedbackController::class, 'store'])->name('Contact-Us.store');

});
//
//Route::get('/contact-us',[\App\Http\Controllers\FeedbackController::class,'index'], function () {
//
//    //return view('Pages/ContactUs');
//
//
//});

Route::get('/order', function () {
    return view('Pages/Order');


});
Route::get('/posts', function () {
    return view('Pages/Posts');


});


Route::get('/admin', function () {//NewDesign
    return view('admin1', [
        'admins' => Admin::Paginate(5)
    ]);
});


Route::get('/dashboard', function () {
    return view('welcome');
   //return view('Maindashboard/index');
   // return \File::get(public_path() . '/SPAindex.html');

 })->middleware(['auth'])->name('dashboard');


// admin CRUD
     //closure function
//    Route::get('/admins', [UsersController::class, 'index'])->name('Admins')->middleware('auth');
//    Route::get('/admins/create', [UsersController::class, 'create'])->name('Admins.create')->middleware('auth');
//    Route::get('/admins/edit/{admin}', [UsersController::class, 'edit'])->name('Admins.edit')->middleware('auth');
//    Route::posts('/admins/update/{id}', [UsersController::class, 'update'])->name('Admins.update')->middleware('auth');
//    Route::posts('/admins/destroy/{id}', [UsersController::class, 'destroy'])->name('Admins.destroy')->middleware('auth');
//    Route::posts('/admins/create', [UsersController::class, 'store'])->name('Admins.store')->middleware('auth');



// admin CRUD
 Route::middleware('auth')->group(function (){   //closure functionRoute::get('/admins', [UserController::class, 'index'])->name('Admins')
       Route::get('/admins', [AdminController::class, 'index'])->name('Admins');
       Route::get('/admins/create', [AdminController::class, 'create'])->name('Admins.create');
       Route::get('/admins/edit/{admin}', [AdminController::class, 'edit'])->name('Admins.edit');
       Route::post('/admins/update/{id}', [AdminController::class, 'update'])->name('Admins.update');
       Route::post('/admins/destroy/{id}', [AdminController::class, 'destroy'])->name('Admins.destroy');
        Route::post('/admins/store', [AdminController::class, 'store'])->name('Admins.store');
        //SHOW ADMIN PROFILE
//         Route::get('/user',[AdminController::class,'edit'])->name('Admin.edit');
//        return view('Pages/UserProfile');

});


// Student CRUD
Route::middleware('auth')->group(function (){

    Route::get('/students', [StudentController::class, 'index'])->name('Students');
    Route::get('/students/create', [StudentController::class, 'create'])->name('Students.create');
    Route::get('/students/edit/{student}', [StudentController::class, 'edit'])->name('Students.edit');
    Route::post('/students/update/{id}', [StudentController::class, 'update'])->name('Students.update');
    Route::post('/students/destroy/{id}', [StudentController::class, 'destroy'])->name('Students.destroy');
    Route::post('/students/create', [StudentController::class, 'store'])->name('Students.store');

});

// Staff CRUD
Route::middleware('auth')->group(function (){

    Route::get('/staffs', [StaffController::class, 'index'])->name('Staffs');
    Route::get('/staffs/create', [StaffController::class, 'create'])->name('Staffs.create');
    Route::get('/staffs/edit/{student}', [StaffController::class, 'edit'])->name('Staffs.edit');
    Route::post('/staffs/update/{id}', [StaffController::class, 'update'])->name('Staffs.update');
    Route::post('/staffs/destroy/{id}', [StaffController::class, 'destroy'])->name('Staffs.destroy');
    Route::post('/staffs/create', [StaffController::class, 'store'])->name('Staffs.store');

});

// course CRUD
Route::middleware('auth')->group(function (){

    Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
    Route::get  ('/courses/edit/{course}', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::post('/courses/update/{id}', [CoursesController::class, 'update'])->name('courses.update');
    Route::post('/courses/destroy/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');
    Route::post('/courses/create', [CoursesController::class, 'store'])->name('courses.store');

});


// landing CRUD
Route::middleware('auth')->group(function (){

   // Route::get('/landing', function(){ return  view('landing.index'); }  );
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
    Route::get  ('/courses/edit/{course}', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::post('/courses/update/{id}', [CoursesController::class, 'update'])->name('courses.update');
    Route::post('/courses/destroy/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');
    Route::post('/courses/create', [CoursesController::class, 'store'])->name('courses.store');

});



///seperated file for the Auth procees ++ import
require __DIR__.'/auth.php';

// Route::get('login', function () {
//     // return view('welcome');
//     // return view('Home/index');
//     //return view('Maindashboard/index');
//     return  ' HOlaa ! ';

// })->name('login');


Route::get('/landing', function(){
    
    return  view('Landing.index'); }  );


