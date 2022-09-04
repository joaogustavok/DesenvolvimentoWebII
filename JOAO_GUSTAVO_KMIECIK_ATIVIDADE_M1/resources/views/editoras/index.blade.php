@extends('../layouts/layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-light mt-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/autores">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/livros">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/editoras">Editoras</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="uper">
        @if (session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
        <h1>Editoras</h1>
        <a href="{{ route('editoras.create') }}" class="btn btn-primary">Adicionar Editora</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Estado</td>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($editoras as $editora)
                <tr>
                    <td>{{ $editora->id }}</td>
                    <td>{{ $editora->nome_editora }}</td>
                    <td>{{ $editora->estado_editora }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('editoras.edit', $editora->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('editoras.destroy', $editora->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ml-3" type="submit">Deletar</button>
                            </form>
                            <a href="{{ route('editoras.show', $editora->id) }}" class="btn btn-info">Mostrar</a>
                            <div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
