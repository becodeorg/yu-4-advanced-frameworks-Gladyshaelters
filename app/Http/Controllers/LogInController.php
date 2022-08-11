<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
       public function show ()
    {
        return view("pages.logIn");
    }

       public function submitLogIn(Request $request)
    {
     
        $user = $request->input('user');
        return view("pages.loggedIn")->with('user', $user);  
    }
}
