@extends('../layouts/layout')
@section('content')

    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Editar dados do Livro
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('livros.update', $livro->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nome_livro">Nome do livro:</label>
                    <input type="text" class="form-control" name="nome_livro" value="{{ $livro->nome_livro }}" />
                </div>
                <div class="form-group">
                    <label for="nome_original">Nome Original:</label>
                    <input type="textarea" class="form-control" name="nome_original" value="{{ $livro->nome_original }}" />
                </div>
                <div class="form-group">
                    <label for="genero_livro">Gênero do Livro:</label>
                    <input type="textarea" class="form-control" name="genero_livro" value="{{ $livro->genero_livro }}" />
                </div>
                <div class="form-group">
                    <label for="sinopse_livro">Sinopse do Livro:</label>
                    <input type="textarea" class="form-control" name="sinopse_livro" value="{{ $livro->sinopse_livro }}" />
                </div>
                <div class="form-group">
                    <label for="paginas_livro">Quantidade de Páginas:</label>
                    <input type="textarea" class="form-control" name="paginas_livro" value="{{ $livro->paginas_livro }}" />
                </div>
                <div class="form-group">
                    <label for="anopub_livro">Data de Publicação:</label>
                    <input type="textarea" class="form-control" name="anopub_livro" value="{{ $livro->anopub_livro }}" />
                </div>
                <div class="form-group">
                    <label for="editora_livro">Editora do Livro:</label>
                    <input type="textarea" class="form-control" name="editora_livro" value="{{ $livro->editora_livro }}" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Atualizar Dados</button>
            </form>
        </div>
    </div>
@endsection
