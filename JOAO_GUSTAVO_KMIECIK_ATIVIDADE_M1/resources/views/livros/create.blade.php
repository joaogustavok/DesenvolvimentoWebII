@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Adicionar novo Livro
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
            <form method="post" action="{{ route('livros.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="livro">Nome do Livro:</label>
                    <input type="text" class="form-control" name="nome_livro" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="nome_original">Nome Original:</label>
                    <input type="textarea" class="form-control" name="nome_original" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="autor">Gênero do Livro:</label>
                    <input type="textarea" class="form-control" name="genero_livro" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="autor">Sinopse do Livro:</label>
                    <input type="textarea" class="form-control" name="sinopse_livro" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="autor">Quantiade de Páginas:</label>
                    <input type="textarea" class="form-control" name="paginas_livro" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="autor">Data de Publicação:</label>
                    <input type="textarea" class="form-control" name="anopub_livro" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="autor">Editora do Livro:</label>
                    <input type="textarea" class="form-control" name="editora_livro" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Adicionar Livro</button>
            </form>
        </div>
    </div>
@endsection
