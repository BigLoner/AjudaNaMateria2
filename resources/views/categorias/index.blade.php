@extends('layouts-base.base')

@section('content')
    <h1>Gestão de Categorias</h1>

    <a href="{{ route('categorias.create') }}" class="btn btn-dark">Criar Nova</a>
    <a href="blog" class="btn btn-dark">Voltar Blog</a>
    <div class="mt-3">
        @if (Session::has('ok'))
        <div class="alert alert-success" role="alert">
            {{Session::get('ok')}}
        </div>
        @endif
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
                <th scope="col">Posts</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categorias as $categoria)
                <tr>
                    <th scope="row">{{ $categoria->id }}</th>
                    <td>{{ $categoria->categoria }}</td>
                    <td>
                        <ul class="list-group">
                        @foreach ($categoria->posts as $post)
                            <li class="list-group-item">{{ $post->titulo }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-sm btn-warning me-2">Editar</a>
                            <form action="{{route('categorias.destroy', $categoria->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Ainda sem categorias</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
