<?php

namespace App\Htpp\Services\Menu;


use App\Models\Menu;
use Illuminate\Support\Str;

class MenuService
{
    
    public function create($request)
    {
        try{
    
            // Menu::create([ 
            //     'name' =>(String)$request->input('name'),
            //     'parent_id' =>(int)$request->input('parent_id'),
            //     'description'=>(String)$request->input('description'),
            //     'content'=>(String)$request->input('content'),
            //     'active'=>(String)$request->input('active'),
            //     'slug' =>Str::slug($request->input('name'), ' '),
            // ]);
            // Sesstion::flash('success','Tạo danh mục Thành công');
        }catch(\Exception $err){
            // Sesstion::flash('error',$err->getMessage());
            // return false;
        }
        // return true;
    }
}