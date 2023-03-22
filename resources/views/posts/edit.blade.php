<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tecno Car</title>
</head>
    <div class="container">
        <h1>Edit Posts</h1>

        <form action="{{route('posts.update', $post, $categorias)}}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título da Publicação</label>
                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo"
                    name="titulo" value="{{ $post->titulo }}">
                @error('titulo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="destaque" class="form-label">Destaque</label>
                <textarea class="form-control @error('destaque') is-invalid @enderror" name="destaque" id="destaque"
                    rows="3">{{ $post->destaque }}</textarea>
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
                <label for="categoria_id" class="form-label">Categoria</label>
                <select name="categoria_id" id="categoria_id"
                    class="form-control @error('categoria_id') is-invalid @enderror">
                    <option value="">Escolha a categoria</option>
                    @foreach ($categorias as $categoria)
                        @if ($categoria->id === $post->categoria_id)
                            <option selected value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @else
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endif
                    @endforeach
                </select>
                @error('categoria_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar Publicações </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
