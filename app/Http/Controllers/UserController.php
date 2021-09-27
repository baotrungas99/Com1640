<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category_ideas;
use App\Models\User;
use Session;
use Auth; //Using Auth
session_start();

class UserController extends Controller
{
    //login user
    public function dashboard(Request $request){
        $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required|max:255',
        ]);
        if(Auth::attempt(['email'=> $request->email,'password'=>$request->password])){
            // echo 'ok';
            $category = Category_ideas::orderBy('category_id', 'desc')->get();
            return view('admin.dashboard')->with(compact('category'));
        }else{
            return redirect('/login')->with('message', 'Email or Password is incorrect');
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/login')->with('message', 'Loguut successfully');
    }
}
