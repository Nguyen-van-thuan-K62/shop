<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Htpp\Services\Menu\MenuService;
use App\http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Validate;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;     
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    // protected $menus;
    // protected $listsp;
    public function create(){
        return View('admin.menu.add',[
            'title' =>"Thêm Danh Mục Mới",
            //$menus = 'menus'=>Menu::where('id',0)->get()
        ]);
        //return $menus;
    }
    // public function upfile(Request $request)
    // {
    //     $file= $request->file('image');
    //     $filename= date('YmdHi').$file->hashName();
    //     $file-> move(public_path('public/Image'), $filename);
    //     $data['image']= $filename;
    //     $data->save();
    // }
    public function store(Request $request){
        $this->validate($request,[
            'image'=>"required",
            'name'=> "required",
            'description'=>"required",
            'price'=>"required",
            'content'=> "required",
        ]);

        try{
            Menu::create([ 
                // 'image'=>(String)$request->input('image'),
                'image'=>$request->file('image')->store('public/Image'),
                'name' =>(String)$request->input('name'),
                'description'=>(String)$request->input('description'),
                'price'=>(String)$request->input('price'),
                'content'=>(String)$request->input('content'),
            ]);
                Session::flash('success','Thêm Thành Công Sản Phẩm');
        }catch(\Exception $err){
                Session::flash('error',$err->getMessage());
            return false;
        }
          return true.redirect()->back();
        
    }
    public function index(){
        return View('admin.menu.list',[
            'title'=>'Danh sách mục mới nhất ',
            // $lists = 'list'=>Menu::('id')//->paginate(20)
            'lists' =>Menu::paginate(5),
        ]);
        
    }
    public function delete($id){
        $menu = Menu::findOrFail($id);
        $menu->delete();
        Session::flash('success','Xóa thành công danh mục');

        return redirect()->back();
    }
    public function update(Request $request,$id){
        //tim doi tuong muon update
        $menus =  Menu::findOrFail($id);
        //gan du lieu vao data
        $data = $request->all();

        //ma hoa password truoc khi day ra dp
        //$data['password'] = Hash::make($request->password);

        //update menu
        $menus->update($data);
        Session::flash('success','Sửa thành công');
        //return view('admin.menu.list');
        return redirect()->back();

     }
    public function edit($id){

        $menu = Menu::findOrFail($id);

        return view('admin.menu.edit',[
            'title' => "Sửa Danh Mục",
        ] ,compact('menu'));
    }

    public function search(){
        return view('admin.menu.search',[
            'title' =>'Tìm  kiếm sản phẩm ',
        ]);
    }
    
    public function searchFullText(Request $request){
        $keyword = $request->input('name');
        $results = Menu::where('name', 'LIKE', "%$keyword%")->get();
        return view('admin.menu.searchFullText', [
            'title' =>'kết quả tìm kiếm ',
            'results' => $results]);
    }

}