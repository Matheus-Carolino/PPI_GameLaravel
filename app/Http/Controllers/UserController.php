<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
        $validate = $request->all();
        $validate = Validator($validate, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ])->validate();
        
        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        session()->flash('msg', ['tipo' => 'success', 'text' => 'User registered']);

        return redirect('/login');
    }
}
