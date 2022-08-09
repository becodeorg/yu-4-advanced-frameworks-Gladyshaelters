<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function show()
    {
        return view("pages.signup");
    }
}
