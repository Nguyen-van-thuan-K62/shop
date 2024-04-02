<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class MainController extends Controller
{
    public function index(){
        return View('admin.user.home',[
            'title'=>"Quản Trị Admin",
            'users'=>User::paginate(5)
        ]);
        
    }
    public function delete($id){
        $menu = User::findOrFail($id);
        $menu->delete();
        Session::flash('success','Xóa thành công người dùng');

        return redirect()->back();

    }
    
}
