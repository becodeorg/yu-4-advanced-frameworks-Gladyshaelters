<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogInController;

Route::get('/', [HomeController::class, 'show'] )->name("home");
Route::get('about', [AboutController::class, 'show'] )->name("aboutPage");
Route::get('contact', [ContactController::class, 'show'] )->name("contact");
Route::get('signup', [SignupController::class, 'show'] )->name("signup");
Route::get('logIn', [LogInController::class, 'show'] )->name("logIn");