@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Dados do Autor
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
                <dl class="dl-horizontal">
                    <dt>Nome:</dt>
                    <dd>{{ $autor->nome_autor }}</dd>
                    <dt>Nacionalidade:</dt>
                    <dd>{{ $autor->nacao_autor }}</dd>
                </dl>
            <a href="{{ route('autores.index') }}" class="btn btn-primary mt-3">Voltar</a>
        </div>
    </div>
@endsection
