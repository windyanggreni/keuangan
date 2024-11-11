<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriPemasukanController;
use App\Http\Controllers\KategoriPengeluaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login',[LoginController::class,'index']) -> name('login');
Route::get('/register',[RegisterController::class,'index']);
Route::get('/dashboard',[DashboardController::class,'index'])-> middleware('auth');

Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/register',[RegisterController::class,'store']);
Route::post('/logout',[LoginController::class,'logout']);

Route::resource('/kpemasukan',KategoriPemasukanController::class)->middleware('auth');
Route::resource('/kpengeluaran',KategoriPengeluaranController::class)->middleware('auth');
Route::resource('/pemasukan',PemasukanController::class)->middleware('auth');
Route::resource('/pengeluaran',PengeluaranController::class)->middleware('auth');

