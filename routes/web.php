<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['users' => User::with([
        'posts' => function($qwerty) {
            $qwerty = Post::all()->where('new','0');
        }])->get()]);
});

Route::get('/reg', action: [RegController::class, 'show'])->name('regShow');
Route::get('/log', action: [LogController::class, 'show'])->name('logShow');

Route::post('/log/1', action: [LogController::class, 'log'])->name('log');
Route::post('/reg/1', action: [RegController::class, 'reg'])->name('reg');
Route::get('/logout', action: [LogController::class, 'logout'])->name('logout');
Route::post('/post', action: [PostController::class, 'new'])->name('new');

Route::get('/profile', action: [PostController::class, 'profile'])->name('profile');

Route::get('/old', action: [PostController::class, 'old'])->name('old');
Route::get('/newnew', action: [PostController::class, 'newnew'])->name('newnew');