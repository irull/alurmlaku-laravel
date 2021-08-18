<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;

class PostControllers extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // dd(Post::latest()->get());
        
        
        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search']))->get()
        ]);   
    }
  
    public function show(Post $post)
    {
    return view('post',[
        "title" => "Single Post",
        "active" => "posts",
        "post" => $post
    ]);
    }
}
