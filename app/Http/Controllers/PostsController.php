<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::take(20)
            ->orderBy('created_at','DESC')
            ->get();

        $categories = Category::take(10)
            ->orderBy('name','ASC')
            ->get();

        return view('posts.index',compact('posts','categories'));

    }

    //
    public function show($slug)
    {
        $posts = Post::take(6)->get();

        $post = Post::where('slug',$slug)->first();

        $categories = Category::get();

        return view('posts.show',compact('post','posts','categories'));
    }
}
