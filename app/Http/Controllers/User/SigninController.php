<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Signup;

class SigninController extends Controller
{
    public function index(){
        return view('user.signin');
    }

    public function signin(Request $request)
    {
        $this ->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'name' =>'admin',
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            
        ])){
            return redirect() ->route('admin'); 

        }  else if(Auth::attempt([
            'name' =>'user',
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            
        ])){
            return redirect() ->route('user_signin'); 
        }
            Session::flash('error','Email Or Pass not');

            return redirect()->Back();
    }
}
