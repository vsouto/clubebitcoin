<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::limit(6)
            ->orderBy('created_at','DESC')
            ->with('category')
            ->get();

        $categories = Category::get();

        return view('pages.home', compact('posts','categories'));
    }

    public function sobre()
    {

        $categories = Category::get();

        return view('pages.sobre', compact('posts','categories'));
    }
}
