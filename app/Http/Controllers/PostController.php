<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ public function index()
    {
        $posts = Post::all();
        return view('posts.index ', [
            'posts' => $posts,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $recentPosts = Post::orderBy('updated_at', 'DESC')->take(3)->get();
        return view('posts.create', [
            'categorias' => $categorias, 'recentPosts' => $recentPosts,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $dados['user_id'] = Auth::user()->id;
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgName = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimgs\\posts';
            $img->move($path, $imgName);
            $dados['imagem'] = $imgName;
        }
        Post::create($dados);
        session()->flash('ok', 'Post inserido com sucesso');
        return redirect()->route('posts');
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categorias = Categoria::all();
        return view('posts.edit', [
            'post' => $post,
            'categorias' => $categorias,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        if ($request->has('imagem')) {
            $img = $request->file('imagem');
            $imgName = time() . '.' . $img->getClientOriginalExtension();
            $path = 'appimgs\\posts';
            $img->move($path, $imgName);
            $dados['imagem'] = $imgName;
        }
        Post::findOrFail($id)->update($dados);
        session()->flash('ok', 'Post editado com sucesso');
        return redirect()->route('posts.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts');
    }
}
