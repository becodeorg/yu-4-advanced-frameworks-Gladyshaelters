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


//Loggedin Routes

Route::get('homeLoggedIn', [LogInController::class, 'submitLogIn'] )->name("loggingIn");
Route::post('homeLoggedIn', [LogInController::class, 'submitLogIn'] )->name("submitLoggedIn");




//still need to make controller and  USE


Route::get('posts', function(){
    return view('loggedIn.posts');
    }
);

Route::get('profile', function(){
    return view('loggedIn.profile');
    }
);

Route::get('milestone', function(){
    return view('loggedIn.milestone');
    }
);

Route::get('healthStats', function(){
    return view('loggedIn.healthStats');
    }
);

Route::get('album', function(){
    return view('loggedIn.album');
    }
);

Route::get('agenda', function(){
    return view('loggedIn.agenda');
    }
);

Route::get('connections', function(){
    return view('loggedIn.connections');
    }
);



