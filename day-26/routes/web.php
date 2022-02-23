<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class, 'create'])->name('new-student');
Route::post('/add-student',[BlogController::class, 'create1'])->name('blog');
Route::get('/add-blog',[BlogController::class, 'index'])->name('add-blog');
