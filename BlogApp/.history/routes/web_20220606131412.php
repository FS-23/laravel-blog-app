<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
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

Route::get('/blog/detail' , [BlogController::class , 'show']);
Route::post('/blog/store' , [BlogController::class , 'store']);


// Route::view('/product' , 'product.list');

Route::get('/product' , function(){
    $name = "Akhenaton";

    $products = [
        ["name" => "NIKE" , "description" =>  "NIKE 2022"],
        ["name" => "BALANCIAGA" , "description" =>  "BALANCIAGA 2022"],
    ];
    
    $datas =  ["username" => $name , "info" => "Rabat"];
    return view('product.list' , ["products" => $products]);
});


// Route::any('/anyPath', function(){
//    return "Hello world";
// });