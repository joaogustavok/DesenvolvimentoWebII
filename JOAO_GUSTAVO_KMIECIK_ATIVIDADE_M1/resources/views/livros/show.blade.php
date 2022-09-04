@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Dados do Livro
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <dl class="dl-horizontal">
                <dt>Nome:</dt>
                <dd>{{ $livro->nome_livro }}</dd>
                <dt>Nome Original:</dt>
                <dd>{{ $livro->nome_original }}</dd>
                <dt>Gênero:</dt>
                <dd>{{ $livro->genero_livro }}</dd>
                <dt>Sinopse:</dt>
                <dd>{{ $livro->sinopse_livro }}</dd>
                <dt>Paginas:</dt>
                <dd>{{ $livro->paginas_livro }}</dd>
                <dt>Ano de Publicação:</dt>
                <dd>{{ $livro->anopub_livro }}</dd>
                <dt>Editora:</dt>
                <dd>{{ $livro->editora_livro }}</dd>
            </dl>

            <a href="{{ route('livros.index') }}" class="btn btn-primary mt-3">Voltar</a>
        </div>
    </div>
@endsection
