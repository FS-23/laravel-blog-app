<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;



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


    return view('product.list');
});


// Route::any('/anyPath', function(){
//    return "Hello world";
// });