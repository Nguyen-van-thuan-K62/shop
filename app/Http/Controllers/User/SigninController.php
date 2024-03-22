<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;

class SigninController extends Controller
{
    public function index(){
        return view('user.signin');
    }

    public function signin(Request $request)
    {
       
    }
}
