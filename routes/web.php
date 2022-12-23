<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() { return redirect()->route('home'); });

/*
    |--------------------------------------------------------------------------
    | Pages Routes
    |--------------------------------------------------------------------------
*/
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/maintenance', [PageController::class, 'maintenance'])->name('maintenance');
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::get('/wizard', [PageController::class, 'wizard'])->name('wizard');
// Route::get('/form', Form::class)->name('form');
Route::get('/', [PageController::class, 'home'])->name('posts.create');

/*
    |--------------------------------------------------------------------------
    | Auth Routes
    |--------------------------------------------------------------------------
*/
Auth::routes();

/*
    |--------------------------------------------------------------------------
    | Profile Routes
    |--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function() {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});

/*
    |--------------------------------------------------------------------------
    | Models Routes
    |--------------------------------------------------------------------------
*/
