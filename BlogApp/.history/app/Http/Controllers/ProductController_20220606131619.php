<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $name = "Akhenaton";
    
        $products = [
            ["name" => "NIKE" , "description" =>  "NIKE 2022"],
            ["name" => "BALANCIAGA" , "description" =>  "BALANCIAGA 2022"],
            ["name" => "Pinata" , "description" =>  "pinata RBM 2022"],
        ];
        
        $datas =  ["username" => $name , "info" => "Rabat"];
        return view('product.list' , ["products" => $products]);
    }
}
