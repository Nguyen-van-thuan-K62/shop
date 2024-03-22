<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add_cart($id){

        $menus = Menu::find($id); 

        Cart::create([
            'image' => $menus->image,
            'description' =>$menus->description,
            'price' =>$menus->price,
        ]);

        // $data = $request->all();
        // Cart::create($data);

        // echo $menus->image;
        // echo $menus->description;
        // echo $menus->price;
        // Cart::create([            
        //     'image' =>(String)$request->input('$menus->image'),
        //     'description'=>(String)$request->input($menus->description),
        //     'price'=>(String)$request->input( $menus->price),
        //     // "image" =>(int)$request->input('image'),
        //     // "description"=>(String)$request->input('description'),
        //     // "price"=>(String)$request->input('price'),
        //     // 'price'=>(String)$request->input('price'),
        //     // 'content'=>(String)$request->input('content'),
        // ]);

        // $data = $request->all();
        

        // Cart::create($data);
   

        // Session::flash('success','Them thanh cong');


        // // Cart::create($data);
         return redirect()->back();
}
     
}
