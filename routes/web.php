<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/locale/{locale}', [AppController::class, 'setLocale'])->name('setLocale');
Route::get('/blog/{slug}', [AppController::class, 'blogDetail'])->name('blogDetail');
