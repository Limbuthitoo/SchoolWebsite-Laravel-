<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Backend\SchoolController;
use App\Http\Controllers\Backend\PostController;

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

Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/course',[PageController::class,'course']);
Route::get('/teacher',[PageController::class,'teacher']);
Route::get('/event',[PageController::class,'event']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/coursedetail',[PageController::class,'coursedetail']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('school',SchoolController::class);
Route::resource('post',PostController::class);
