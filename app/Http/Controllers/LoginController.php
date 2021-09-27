<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;//
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request; //
use Symfony\Contracts\Service\Attribute\Required; //
use App\Providers\RouteServiceProvider; //
// use AuthenticatesUsers;
use Auth;
use App\Models\Category_ideas;
use DB;
class LoginController extends Controller
{
     //
    // protected $redirectTo = RouteServiceProvider::HOME;//

    public function login(){
        return view('login');
    }
    // public function logout(Request $request){
    //     $destination = \Auth::logout(); //
    //     return redirect()->to($destination); //
    // }
    public function show_dashboard(){
        $category = Category_ideas::orderBy('category_id', 'desc')->get();

        return view('admin.dashboard')->with(compact('category'));
    }
}
