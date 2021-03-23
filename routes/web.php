<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\View\Component;

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

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
    Route::get('/create', [PostController::class,'create'])->name('post.create')->middleware('auth');
    Route::get('/edit/{post}', [PostController::class,'edit'])->name('post.edit')->middleware('auth');
    Route::get('/show/{slug}', [PostController::class , 'show'])->name('post.show')->middleware('auth');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');
    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
    dd($user);
    // $user->token
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')
    ->with(['hd' => 'gmail.com'])
    ->redirect();
});
Route::get('/auth/google/callback', function () {
    $user = Socialite::driver('google')->user();
    dd($user);
    // $user->token
});
