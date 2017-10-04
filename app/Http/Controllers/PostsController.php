<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show($slug)
    {
        $posts = Post::take(6)->get();

        $post = Post::where('slug',$slug)->first();

        $categories = Category::get();

        return view('posts.show',compact('post','posts','categories'));
    }
}
