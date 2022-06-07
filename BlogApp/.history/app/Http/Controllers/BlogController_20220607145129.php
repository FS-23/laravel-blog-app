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
        $allBlogs = Blog::all()    ; // select * from blogs
        return view('blog.list' , ["blogs" =>  $allBlogs]);
    }

    function store(Request $request , $id){

        if($id == 0)
           $result =  Blog::create( $request -> all());
        else 
        {
           $blog = Blog::find($id);
           $blog -> update($request -> all());
        }
        return redirect('/blog/list');
    }

    function show($id){

         $blog = Blog::find($id);
         if(empty($blog)){
             return redirect('/blog/list');
         }
         return view('blog.detail',  ['blog' => $blog]);
    }


    function create($id){
        $blog = ["id" => 0 , 'title' => "" , "content" => "" , "categorie" => ""];

        if($id > 0){
            $myBlog = Blog::find($id);

            if(!empty($myBlog))
              $blog =  $myBlog;
              
        }
        return view('blog.create', $blog);
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
