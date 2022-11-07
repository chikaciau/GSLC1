<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/home', [App\Http\Controllers\Controller\HomeController::class, 'index'])->name('home');

Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index']);

