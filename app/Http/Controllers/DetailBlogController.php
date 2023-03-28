<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\Controller;


class DetailBlogController extends Controller
{
    public function detailBlog($id){
        $post = Post::findOrFail($id);
        return view('detailBlog',[
            'post' => $post,
        ]);
    }

}
