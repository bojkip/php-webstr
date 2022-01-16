<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;






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


Route::get('/home',[PostsController::class, 'index']);



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact_us', function () {
    return view('pages.contact_us');
});

// Route::get('/createPostForm','PostsController@createPostForm');

Route::get('/createPostForm',[PostsController::class, 'createPostForm']);

Route::post('/submitPostForm',[PostsController::class, 'submitPostForm'])->name('submitPostForm');




