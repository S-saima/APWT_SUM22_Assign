<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
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

Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/user/all',[UsersController::class,'list'])->name('user.list');
Route::get('/user/details/{id}/info',[UsersController::class,'details'])->name('user.details');
Route::get('/user/create',[UsersController::class,'create'])->name('user.create');
Route::post('/user/create',[UsersController::class,'createSubmit'])->name('user.create.submit');

Route::get('/user/login',[UsersController::class,'login'])->name('user.login');
Route::post('/user/login',[UsersController::class,'loginSubmit'])->name('user.login.submit');
