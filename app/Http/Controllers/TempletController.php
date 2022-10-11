<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempletController extends Controller
{
    public function index(){
        return view('index');
    }
}
