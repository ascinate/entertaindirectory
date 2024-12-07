<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_featured', 'Y')
                     ->orderBy('id', 'desc')
                     ->take(8)
                     ->get();
       $latestPosts = Post::orderBy('id', 'desc')
                     ->take(8)
                     ->get();

        return view('home', ['posts' => $posts,'latestPosts' => $latestPosts]);
    }
}
