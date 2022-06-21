<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\apiController;
use App\Http\Controllers\TeacherController;

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

// Route::get('/{name}', function ($name) {
//     // echo $name;
//     return view('register', ['name'=>$name]);
// });

// Route::get('/', function() {
//     // return view('welcome');
//     return redirect('dashboard');
// });

// Route::view('dashboard', 'dashboard');

// Route::get('/register', function() {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('users/{userName}', [User::class, 'index']);

Route::get('/', function() {
    return redirect('register');
});

Route::view('login', 'login');
Route::view('register', 'register');
Route::post('dashboard', [UserController::class, 'fetch']);
Route::get('students', [StudentsController::class, 'showData']);
Route::get('admin', [AdminController::class, 'index']);
Route::get('apiData', [apiController::class, 'index']);
Route::get('teacher', [TeacherController::class, 'index']);
Route::get('/teacher', function() {
    return view('teacher');
});

Route::post('store', [TeacherController::class, 'store']);

Route::get('teachersData', [TeacherController::class, 'show']);
Route::get('delete/{id}', [TeacherController::class, 'destroy']);
Route::get('edit/{id}', [TeacherController::class, 'edit']);
Route::post('update/{id}', [TeacherController::class, 'update']);