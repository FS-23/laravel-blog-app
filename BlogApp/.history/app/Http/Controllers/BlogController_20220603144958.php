<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $blog1 = new Blog("Learn Python" ,  "Learn pyton with moha");
        $blog2 = new Blog("Learn CSS/HTML" ,  "Learn pyton with Youssef - Nour -Mohamed");
        $blog3 = new Blog("Learn PHP" ,  "Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.");
        $blog4 = new Blog("Learn React" ,  "Learn pyton with Karl");
    
     
        $blogs = [$blog1 , $blog2 , $blog3 , $blog4];
        // $blogs = [
        //     ["title" => "Learn Python" , "content" => "Learn pyton with moha"],
        //     ["title" => "Learn CSS/HTML" , "content" => "Learn pyton with Youssef - Nour -Mohamed"],
        // ];
        return view('blog.list' , ["blogs" =>  $blogs]);
    }
}


class Blog{
    public $title;
    public $content;

    function __construct($title , $content){
        $this -> title = $title;
        $this -> content = $content;
    }
}
