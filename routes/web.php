<?php
namespace Illuminate\Session\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\SignupController;
use App\Http\Controllers\User\SigninController;


//admin login

Route::get('/admin/user/login',[LoginController::class,'index'])->name('login');
Route::post('/admin/user/login/store',[LoginController::class,'store']);
//admin CURDS MENU
Route::middleware(['auth'])->group(function(){

    Route::prefix('/admin')->group(function(){

        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('/main',[MainController::class,'index']);
    
        Route::prefix('/menu')->group(function(){

             Route::get('/add',[MenuController::class,'create']);
             Route::post('/add',[MenuController::class,'store']);
             Route::get('/list',[MenuController::class,'index']);
             Route::get('/delete/{id}',[MenuController::class,'delete']);
             Route::get('/update/{id}',[MenuController::class,'edit']);
             Route::post('/update/{id}', [MenuController::class, 'update']);
             Route::get('/search', [MenuController::class, 'search']);
             Route::post('/search', [MenuController::class, 'searchFullText'])->name('search');
        });
  
    });

 });

 //USER 
 Route::get('/index',[HomeController::class,'index'])->name('index');
 Route::get('/show_details',[HomeController::class,'show_details']);

 Route::get('/user/signup',[SignupController::class,'index']);
 Route::post('/user/signup',[SignupController::class,'signup']);

 Route::get('/user/signin',[SigninController::class,'index']);
 Route::post('/user/signin',[SigninController::class,'signin']);

 //cart
 Route::post('cart/add/{id}',[CartController::class,'add_cart']);