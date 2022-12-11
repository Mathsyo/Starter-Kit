<?php

use App\Http\Controllers\PageController;
use App\Http\Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

# Pages Routes
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/', function() { return redirect()->route('home'); });

Route::get('/users', [PageController::class, 'users'])->name('users');
Route::get('/wizard', [PageController::class, 'wizard'])->name('wizard');
// Route::get('/form', Form::class)->name('form');

Route::get('/', [PageController::class, 'home'])->name('posts.create');

# Auth Routes
Auth::routes();



