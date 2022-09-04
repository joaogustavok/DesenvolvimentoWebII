@extends('../layouts/layout')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
    <div class="card uper">
        <div class="card-header">
            Adicionar nova Editora
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
            <form method="post" action="{{ route('editoras.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="editora">Nome da Editora:</label>
                    <input type="text" class="form-control" name="nome_editora" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="estado_editora">Estado:</label>
                    <input type="textarea" class="form-control" name="estado_editora" />
                </div>
                <button type="submit" class="btn btn-primary mt-3">Adicionar Editora</button>
            </form>
        </div>
    </div>
@endsection
