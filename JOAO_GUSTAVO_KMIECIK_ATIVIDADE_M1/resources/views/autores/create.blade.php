@extends('../layouts/layout')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Adicionar novo Autor
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
            <form method="post" action="{{ route('autores.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="nome_autor">Nome do autor:</label>
                    <input type="text" class="form-control" name="nome_autor" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="nacao_autor">Nacionalidade:</label>
                    <input type="textarea" class="form-control" name="nacao_autor" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Adicionar Autor</button>
            </form>
        </div>
    </div>
@endsection
