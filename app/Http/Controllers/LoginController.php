<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('home');
        }
        else {
            return redirect()->back();
        }

    }

    public function home(){

        return view('home');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
