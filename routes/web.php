<?php
use App\Http\Controllers\DangkyController;
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

Route::get('register' ,[DangkyController::class,'showFromRegister'])->name('show-form-register');
Route::post('register' ,[DangkyController::class,'register'])->name('register');

Route::get('login' ,[DangkyController::class,'showFromLogin'])->name('show-form-login');
Route::post('login' ,[DangkyController::class,'login'])->name('login');
Route::get('logout' ,[DangkyController::class,'logout'])->name('logout');
Route::get('profile' ,[DangkyController::class,'ShowProfile'])->name('show-profile');
Route::post('profile' ,[DangkyController::class,'profile'])->name('profile');


