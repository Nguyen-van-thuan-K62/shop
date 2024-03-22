<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signup;

class SignupController extends Controller
{
    public function index(){
        return view('user.signup');
    }
    public function signup(Request $request){
    
        $data = $request->all('name','email','password');
        Signup::create($data);
        return view('user.signin');
    }
}
