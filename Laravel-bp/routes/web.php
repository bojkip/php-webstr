<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminsController;
use Illuminate\Support\Facades\Auth;







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



Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});


Route::get('/',[PostsController::class, 'index']);



Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact_us', function () {
    return view('pages.contact_us');
});

Route::get('/ageRestriction', function () {
    return view('pages.ageRestriction');
})->name('ageRestriction');

Route::get('/loggedInUserPosts', [PostsController::class, 'getPostsFromLoggedInUser']);


// Route::get('/createPostForm','PostsController@createPostForm');

Route::group(['middleware'=>['auth']], function(){

    Route::get('/createPostForm', [AdminsController::class, 'createPostForm'])->middleware('checkAge');

    Route::post('/submitPostForm', [AdminsController::class, 'submitPostForm'])->name('submitPostForm');

    Route::get('/allPosts', [AdminsController::class, 'allPosts']);

    Route::get('/deletePost/{id}', [AdminsController::class, 'deletePost'])->name('deletePost');

    Route::get('/editPost/{id}', [AdminsController::class, 'editPost'])->name('editPost');

    Route::post('/updatePostForm', [AdminsController::class, 'updatePostForm'])->name('updatePostForm');
});











Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
