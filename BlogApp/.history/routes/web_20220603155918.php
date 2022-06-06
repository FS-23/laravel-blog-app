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

Route::get('/blog/detail' , function(){
    $blog = ["title" => "Learn PWA" , "content" => "Learn PWA with Youssef"];
    return view('blog.detail', $blog);
});


Route::view('/blog' , 'info');


// Route::any('/anyPath', function(){
//    return "Hello world";
// });