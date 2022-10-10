<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use app\Models\User;

class AdminController extends Controller
{
    public function register(){
        return view('admin.register');
    }

    public function login(){
        return view('admin.login');
    }

}
