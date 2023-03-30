@extends('layouts.base')

@section('content')
    <h1>As minhas matérias</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-dark">Criar Nova Matéria</a>
    <a href="{{ route('categorias') }}" class="btn btn-dark">Criar Nova Categoria</a>
    <a href="{{ route('auth') }}" class="btn btn-dark">Voltar à Matéria</a>
    <div class="mt-3">
        @if (Session::has('ok'))
        <div class="alert alert-success" role="alert">
            {{Session::get('ok')}}
        </div>
        @endif
        @if (Session::has('danger'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('danger')}}
        </div>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Última Alteração</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->titulo }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->categoria->categoria }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <!--<a href="{{route('posts.show', $post->id)}}" class="btn btn-sm btn-dark me-2">Detalhes</a>-->
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-warning me-2">Editar</a>
                            <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Ainda sem Matérias</td>
                </tr>
            @endforelse
        </tbody>
    </table>

