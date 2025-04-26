<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\customercontroller;
// use App\Http\Controllers\StudentController;
use App\Http\Controllers\teacherController;
// use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('teacher',[teacherController::class,'queries']);

                        //  database base ke liye customercontroller
// Route::get('customer',[customercontroller::class,'customer']);


                    //  Route Group with Controller
// Route::get('show',[StudentController::class,'show']);
// Route::get('add',[StudentController::class,'add']);
// Route::get('delete',[StudentController::class,'delete']);

// Route::view('upload','upload');
// Route::post('upload',[UploadController::class,'upload']);

Route::view('user-form','user-form')->middleware('kkk1');
Route::post('adduser',[UserController::class,'adduser']);


// Route::view('/welcome','welcome');


// use App\Http\Controllers\UserController;

// Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [UserController::class, 'login']);
// Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware('auth');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');


// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('user',[UserController::class,'getUser']);

// Route::view('/home','home');
// Route::view('/about','about

// ');
// Route::view('user-form','user-form');
// Route::post('addUser','[usercontroller::addUser]');
