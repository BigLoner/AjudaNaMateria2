<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Categoria;

class BlogController extends Controller
{
    public function Blog(){
        $posts = Post::all();
        $categorias = Categoria::orderBy('categoria')->get();
        return view('Blog',[
            'posts' => $posts,
            'categorias' => $categorias,
        ]);
    }
}
