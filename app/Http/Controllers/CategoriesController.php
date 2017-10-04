<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function show($slug)
    {
        $categories = Category::get();

        $posts = Post::
            join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.slug',$slug)
            ->orderBy('posts.created_at','DESC')
            ->get();

        return view('categories.show',compact('posts','categories'));
    }
}
