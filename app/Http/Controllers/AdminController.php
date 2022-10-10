<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    public function register(){
        return "Register";
    }

    public function login(){
        return "Login";
    }

}
