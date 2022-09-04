@extends('../layouts/layout')

@section('content')

    <head>
        <title>Autores</title>
    </head>
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
            </div><br />
        @endif
        <h1>Autores</h1>
        <a href="{{ route('autores.create') }}" class="btn btn-primary" id="botaoCriar">Adicionar Autor</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Nacionalidade</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nome_autor }}</td>
                        <td>{{ $autor->nacao_autor }}</td>
                        <td>
                        <div class="btn-group" role="group">
                        <a href="{{ route('autores.edit', $autor->id) }}" class="btn btn-primary">Editar</a>


                            <form action="{{ route('autores.destroy', $autor->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Deletar</button>
                            </form>
                            <a href="{{ route('autores.show', $autor->id) }}" class="btn btn-info">Mostrar</a>
                            <div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        @endsection
