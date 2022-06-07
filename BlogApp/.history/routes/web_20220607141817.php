<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect('/blog/list');
});
 
Route::get('/home', function(){
    $user = ["name" =>  "Nour" , "level" =>  "A"];
    return view('home', $user);
});

Route::get('/blog' , function(){
    return view('blog.home');
});

Route::get('/blog/list' , [BlogController::class , 'index'] );

Route::get('/blog/create' , [BlogController::class  , 'create']);
// [BlogController::class , 'show']
Route::get('/blog/detail/{id}' ,[BlogController::class , 'show']);
Route::get('/blog/delete/{id}' ,[BlogController::class , 'delete']);

Route::post('/blog/store' , [BlogController::class , 'store']);

Route::get('/product' , [ProductController::class , 'index']);

Route::get('/user/create', function(){
    
    return view('user.create');
});
Route::post('/user/store',function(Request $request){
    dd($request -> all());
   // return 'hello world';
});