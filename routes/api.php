<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('apiData/{id?}', [TeacherController::class, 'apiData']);
Route::post('add', [TeacherController::class, 'addApiData']);
Route::put('update', [TeacherController::class, 'updateData']);
Route::delete('delete/{id}', [TeacherController::class, 'deleteData']);
Route::post('validation', [TeacherController::class, 'ApiValidation']);