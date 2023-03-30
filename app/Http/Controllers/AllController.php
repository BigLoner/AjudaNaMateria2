<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\BinaryOp\Equal;
use Illuminate\Support\Facades\Auth;

class AllController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $posts = Post::orderBy('updated_at', 'DESC')->paginate(4);
        return view('all.index', [
            'categorias' => $categorias,
            'posts' => $posts,
        ]);
    }

    public function detail($id)
    {

        $categorias = Categoria::all();
        $post = Post::findOrFail($id);
        return view('all.detail', [
            'categorias' => $categorias,
            'post' => $post,
        ]);
    }
    public function Auth(){
        if(auth()->user()->is_admin==1){
            return redirect()->route('admin.blog');
           }else{
               return redirect()->route('user.blog');
           }
    }
}
