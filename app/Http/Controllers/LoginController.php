<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function logout(){

    }
    public function show_dashboard(){
        return view('admin.dashboard');
    }
}
