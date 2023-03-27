<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('Aluno.index');
    }

}
