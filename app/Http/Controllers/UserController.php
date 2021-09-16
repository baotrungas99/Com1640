<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Session;
use Auth; //Using Auth
session_start();

class UserController extends Controller
{
    public function dashboard(Request $request){
        $data = $request->validate([
            //validation Laravel
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($data);
        $useremail = $data['email'];
        $userpassword = md5($data['password']);
        $login = User::where('email',$useremail)->where('password',$userpassword)->first();
        // dd($login);
        if($login){
            $login_count = $login->count();
            if ($login_count>0) {
                Session::put('username', $login->name);
                Session::put('userid', $login->id);
                // return Redirect::to('/dashboard');
                return redirect('dashboard');
            }
        } else{
                return redirect('login')-with('message','Wrong username or password, please try again!');
        }
    }

}
