<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('register',[AdminController::class,'register']);
Route::get('login',[AdminController::class,'login']);
Route::post('register-users',[AdminController::class,"registerUsers"])->name('register-users');
Route::post('login-users',[AdminController::class,"loginUsers"])->name('login-users');
Route::get('panel',[AdminController::class,"panel"]);
Route::get('logout',[AdminController::class,"logout"]);