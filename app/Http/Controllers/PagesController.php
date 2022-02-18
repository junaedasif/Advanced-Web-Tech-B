<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // php artisan make:Controller PagesController
    function Login(){
        return view('login');
    }
    function Register(){
        return view('registration');
    }
}
