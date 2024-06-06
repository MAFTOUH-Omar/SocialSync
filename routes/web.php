<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [HomeController::class, 'Home']);

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
// Google Oauth
Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
// Github Oauth
Route::get('/auth/github', [GithubController::class, 'redirect'])->name('github-auth');
Route::get('/auth/github/call-back', [GithubController::class, 'callbackGithub']);
// User Routes
Route::middleware('auth')->get('/user-info', [UserController::class, 'showProfile']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
require __DIR__.'/auth.php';