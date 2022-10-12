<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TempletController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\BarChartController;
use App\Http\Controllers\MathController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[TempletController::class,'index']);
Route::get('register',[AdminController::class,'register'])->middleware('NowLogin');
Route::get('login',[AdminController::class,'login'])->middleware('NowLogin');
Route::post('register-users',[AdminController::class,"registerUsers"])->name('register-users');
Route::post('login-users',[AdminController::class,"loginUsers"])->name('login-users');
Route::get('panel',[AdminController::class,"panel"])->middleware('CheckLogin');
Route::get('logout',[AdminController::class,"logout"]);
Route::get('book',[BookController::class,'GetBook']);
Route::get('book-pdf',[PdfController::class,'index'])->name('book-pdf');
Route::get('barchart',[BarChartController::class,'Barchart']);
Route::get('Calculator',[MathController::class,'index']);
Route::post('Calculator',[MathController::class,'Calculator'])->name('calculator.cal');