<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Htpp\Services\Menu\MenuService;
use App\http\Requests\Menu\CreateFormRequest;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('user.home',compact('menus'));
    }
    // public function show_details($id){

    //     $menu =  Menu::findOrFail($id);

    //     return view('user.show_details',compact('menu'));
    // }

    public function show_details(){


        return view('user.show_details');
    }
}

