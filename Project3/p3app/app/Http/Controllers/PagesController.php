<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }
    
}
