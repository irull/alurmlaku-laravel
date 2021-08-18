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


        $posts = Post::latest();
        if(request('search')){
            $posts->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        return view('posts',[
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => $posts->get()
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
