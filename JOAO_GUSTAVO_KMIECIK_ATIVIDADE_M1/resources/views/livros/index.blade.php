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
        <h1>Livros</h1>
        <a href="{{ route('livros.create') }}" class="btn btn-primary">Adicionar Livro</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nome do Livro</td>
                <td>Nome Original</td>
                <td>Gênero do Livro</td>
                <td>Sinopse do Livro</td>
                <td>Quantiade de Páginas</td>
                <td>Data de Publicação</td>
                <td>Editora do Livro</td>
                <td>Ações</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->id }}</td>
                    <td>{{ $livro->nome_livro }}</td>
                    <td>{{ $livro->nome_original }}</td>
                    <td>{{ $livro->genero_livro }}</td>
                    <td>{{ $livro->sinopse_livro }}</td>
                    <td>{{ $livro->paginas_livro }}</td>
                    <td>{{ $livro->anopub_livro }}</td>
                    <td>{{ $livro->editora_livro }}</td>
                    <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('livros.destroy', $livro->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                        <a href="{{ route('livros.show', $livro->id) }}" class="btn btn-info">Mostrar</a>
                        <div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div>
@endsection
