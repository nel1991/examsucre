<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerPost(request $request){

        request()->validate([
                'email' => 'required|email|unique:users',
        ]);

         

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('success', 'Registered Successfully');



    }
    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with('success', 'Login Successful');
        }

        return back()->with('error', 'Email or Password is incorrect');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
