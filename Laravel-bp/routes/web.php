<?php

use Illuminate\Support\Facades\Route;
use App\Http\PostsController;
use App\Http\UsersController;





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

Route::get('/main', function () {
    return view('main');
});


Route::get('/test',[UsersController::class, 'test']);



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact_us', function () {
    return view('pages.contact_us');
});

Route::get('/test','UsersController@test');