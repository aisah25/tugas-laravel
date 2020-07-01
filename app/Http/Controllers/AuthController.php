<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view ('form');
    }
    public function store(){
        return view('dashboard');
    }
}
