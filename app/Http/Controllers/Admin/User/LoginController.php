<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Validate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index(){
        return View('admin.user.login',[
            'title'=>" Đăng nhập"
        ]);  
    }
    public function store(Request $request){
        $this ->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            
        ],$request->input('remember'))){
            
                return redirect() ->route('admin');
        }
            Session::flash('error','Email Or Pass not');
            
            return redirect()->Back();
    }
   
    
}
