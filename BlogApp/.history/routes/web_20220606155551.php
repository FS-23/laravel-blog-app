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
Route::get('/blog/store' , [BlogController::class , 'store']);


// Route::view('/product' , 'product.list');

Route::get('/product' , [ProductController::class , 'index']);


// Route::any('/anyPath', function(){
//    return "Hello world";
// });