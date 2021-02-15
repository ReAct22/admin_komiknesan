<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/guru',[GuruController::class,'index'])->name('guru');
Route::get('/guru/detail/{id_guru}',[GuruController::class,'detail']);
Route::get('/guru/add',[GuruController::class,'add']);
Route::get('/guru/edit/{id_guru}',[GuruController::class,'edit']);
Route::post('/guru/insert',[GuruController::class,'insert']);
Route::post('/guru/update/{id_guru}',[GuruController::class,'update']);
Route::get('/guru/delete/{id_guru}',[GuruController::class,'delete']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/siswa',[SiswaController::class,'index']);
Route::get('/user',[UserController::class,'index']);





