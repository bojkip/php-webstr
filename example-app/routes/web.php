<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CuponController;




/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'store']);

Route::post('/logout', [LogoutController::class , 'store'])->name('logout');


Route::get('/register', [RegisterController::class , 'index'])->name('register');
Route::post('/register', [RegisterController::class , 'store']);

Route::get('/menu', [MenuController::class , 'index'])->name('menu');

Route::get('/cupon', [CuponController::class , 'index'])->name('cupon');
Route::post('/cupon', [CuponController::class , 'store']);












