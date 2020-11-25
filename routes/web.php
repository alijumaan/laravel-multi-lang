<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/change-lang/{local}', [LocaleController::class, 'switch'])->name('change.lang');

Route::group(['middleware' => 'web'], function () {
    require __DIR__.'/auth.php';
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
    Route::get('/',          [HomeController::class, 'home'])->name('home');
    Route::resource('posts', PostController::class);
});
