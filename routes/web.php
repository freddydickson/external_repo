<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Foundation\Bootstrap\RegisterProviders;

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
Route::get('/', function (){
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', [PostController::class, 'index'])->name('posts');
//trying an editing
Route::get('/posts.edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
Route::POST('/posts.update/{post}', [PostController::class, 'update'])->name('posts.update');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

//user post controller
Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

//route for likes
Route::post('/posts/{post}/like', [PostLikeController::class, 'store'])->name('posts.likes');

//the route to unlike
Route::delete('/posts/{post}/like', [PostLikeController::class, 'destroy'])->name('posts.likes');
// Route::get('/', function () {
//     return view('posts.index');
// });
