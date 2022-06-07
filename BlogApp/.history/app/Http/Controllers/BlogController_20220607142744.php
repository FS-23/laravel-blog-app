<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

// Blog::create(...)
// Blog::find(1)
//Blog::destroy(2)
// Blog::all()


class BlogController extends Controller
{
    function index(){
        // $blog1 = new Blog2("Learn Python" ,  "Learn pyton with moha");
        // $blog2 = new Blog2("Learn CSS/HTML" ,  "Learn pyton with Youssef - Nour -Mohamed");
        // $blog3 = new Blog2("Learn PHP" ,  "Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.");
        // $blog4 = new Blog2("Learn React" ,  "Learn pyton with Karl");
        // $blogs = [$blog1 , $blog2 , $blog3 , $blog4];

        $allBlogs = Blog::all()    ; // select * from blogs
        return view('blog.list' , ["blogs" =>  $allBlogs]);
    }

    function store(Request $request){

       // dd($request -> all());
        // //......
        //  $formData = ["title" => "Learn java 123" , "content" => "Learn java with AKHENATON" , "categorie" => "JAVA"];

        $result =  Blog::create( $request -> all());
        return redirect('/blog/list');
    }

    function show($id){

         $blog = Blog::find($id);
         if(empty($blog)){
             return redirect('/blog/list');
         }
         return view('blog.detail',  ['blog' => $blog]);
    }


    function create(){
        return view('blog.create');
    }

    function delete($id){

        // $blog = Blog::find(1);

        // $blog->delete();

        $isDeleted = Blog::destroy($id);
        return redirect('blog/list');
    }
}


class Blog2{
    public $title;
    public $content;

    function __construct($title , $content){
        $this -> title = $title;
        $this -> content = $content;
    }
}
