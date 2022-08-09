<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'show'] )->name("home");
Route::get('about', [AboutController::class, 'show'] )->name("aboutPage");