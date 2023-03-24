<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
        return view('admin-home');
    }
    public function professorhome()
    {
        return view('professorhome');
    }
    public function adminRegras()
    {
        return view('admin-regras');
    }
    public function adminBlog()
    {
        $posts = Post::all();
        return view('admin-blog',[
            'posts' => $posts,
        ]);
    }
}
