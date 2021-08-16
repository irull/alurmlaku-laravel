<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;

class PostControllers extends Controller
{
    public function index()
    {
        // dd(Post::latest()->get());
        return view('posts',[
            "title" => "Posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);   
    }

    public function show(Post $post)
    {
        // dd($post);
    return view('post',[
        "title" => "Single Post",
        "post" => $post
    ]);
    }
}