<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password'=> $request->password])){
            return redirect('/index');
        }else{
            session()->flash('msg', ['tipo' => 'warning', 'text' => 'Email or Password Invalid!']);
            return redirect('/');
        }
    }

    public function logout(){
        session()->flush();

        return redirect('/');
    }
}
