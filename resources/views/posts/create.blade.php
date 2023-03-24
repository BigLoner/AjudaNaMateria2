@extends('layouts.base')

@section('content')

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">



            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <h1>Novo Post</h1>
                        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título do Post</label>
                                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                                    name="titulo" value="{{ old('titulo') }}">
                                @error('titulo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="destaque" class="form-label">Destaque</label>
                                <textarea class="form-control @error('destaque') is-invalid @enderror" name="destaque" id="destaque"
                                    rows="3">{{ old('destaque') }}</textarea>
                                @error('destaque')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="imagem" class="form-label">Imagem</label>
                                <input type="file" class="form-control @error('imagem') is-invalid @enderror" name="imagem" id="imagem"
                                    rows="3" value="{{ old('imagem') }}">
                                @error('imagem')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="desenvolvimento" class="form-label">Desenvolvimento</label>
                                <textarea class="form-control @error('desenvolvimento') is-invalid @enderror" name="desenvolvimento"
                                    id="desenvolvimento" rows="10">{{ old('desenvolvimento') }}</textarea>
                                @error('desenvolvimento')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="categoria_id" class="form-label">Categoria</label>
                                <select name="categoria_id" id="categoria_id"
                                    class="form-control @error('categoria_id') is-invalid @enderror">
                                    <option value="">Escolha a categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                    @endforeach
                                </select>
                                @error('categoria_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Post</button>
                        </form>

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li class="active"><a href="/#">Voltar para o inicio </a></li>
                                <li><a href="{{route('categorias')}}">Voltar para o Categoria</a></li>
                                <li><a href="{{route('posts')}}">Voltar para o Posts</a></li>
                            </ul>
                        </div>



                    </div>

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

@endsection
