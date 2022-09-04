@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Editar dados do Autor
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
            <form method="post" action="{{ route('autores.update', $autor->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nome_autor">Nome do autor:</label>
                    <input type="text" class="form-control" name="nome_autor" value="{{ $autor->nome_autor }}" />
                </div>
                <div class="form-group">
                    <label for="nacao_autor">Nacionalidade:</label>
                    <input type="textarea" class="form-control" name="nacao_autor" value="{{ $autor->nacao_autor }}" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Atualizar Dados</button>
            </form>
        </div>
    </div>
@endsection
