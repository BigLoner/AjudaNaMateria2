<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function Blog(){
        $posts = Post::all();
        return view('Blog',[
            'posts' => $posts,
        ]);
    }
}
