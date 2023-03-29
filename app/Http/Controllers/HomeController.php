<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Categoria;

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
        $categorias = Categoria::orderBy('categoria')->get();
        return view('admin-blog',[
            'posts' => $posts,
            'categorias' => $categorias,
        ]);
    }
    public function adminDetail($id)
    {
        $post = Post::findOrFail($id);
        return view('admin-detail',[
            'post' => $post,
        ]);
    }
    public function userHome(){
        return view('userauth-home');
    }
    public function userRegras(){
        return view('userauth-regras');
    }
    public function userBlog(){
        $posts = Post::all();
        $categorias = Categoria::orderBy('categoria')->get();
        return view('userauth-blog',[
            'posts' => $posts,
            'categorias' => $categorias,
        ]);
    }
    public function userDetail($id){
        $post = Post::findOrFail($id);
        return view('userauth-detail',[
            'post' => $post,
        ]);
    }


}
