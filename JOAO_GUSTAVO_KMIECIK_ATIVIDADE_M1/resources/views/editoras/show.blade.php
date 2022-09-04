@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Dados da Editora
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
                    <dd>{{ $editora->nome_editora }}</dd>
                    <dt>Estado:</dt>
                    <dd>{{ $editora->estado_editora }}</dd>
                </dl>
                <a href="{{ route('editoras.index') }}" class="btn btn-primary mt-3">Voltar</a>
        </div>
    </div>
@endsection
