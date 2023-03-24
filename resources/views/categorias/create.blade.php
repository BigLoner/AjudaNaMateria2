@extends('layouts.base')

@section('content')
    <h1>Gestão de Categorias | Create</h1>
    <form method="POST" action="{{route('categorias.store')}}">
        @csrf
        <div class="mb-3">
            <label for="categoria" class="form-label">Nome da Categoria</label>
            <input type="text" class="form-control @error('categoria') is-invalid @enderror" id="categoria" name="categoria" value="{{old('categoria')}}">
            @error('categoria')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar Categoria</button>
        <a href="{{route('categorias')}}" class="btn btn-secondary">Voltar à lista</a>
    </form>
@endsection
