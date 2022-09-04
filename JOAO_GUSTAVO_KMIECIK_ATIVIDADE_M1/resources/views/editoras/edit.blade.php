@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Editar dados da Editora
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
            <form method="post" action="{{ route('editoras.update', $editora->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="nome_editora">Nome da editora:</label>
                    <input type="text" class="form-control" name="nome_editora" value="{{ $editora->nome_editora }}" />
                </div>
                <div class="form-group">
                    <label for="estado_editora">Nacionalidade:</label>
                    <input type="textarea" class="form-control" name="estado_editora"
                        value="{{ $editora->estado_editora }}" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Atualizar Dados</button>
            </form>
        </div>
    </div>
@endsection
