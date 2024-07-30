@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Categorias</h2>
    </div>

    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$categoria->id}}</td>
        </tr>
        <tr>
            <th>Titulo</th>
            <td>{{$categoria->titulo}}</td>
        </tr>
        <tr>
            <th>imagem</th>
            <td>{{$categoria->imagem}}</td>
        </tr>
        <tr>
            <th>descricao</th>
            <td>{{$categoria->descricao}}</td>
        </tr>
    </table>

    <a href="{{route('categoria.editar', ['id' => $categoria->id])}}" class="btn btn-primary">Editar</a>
    <a href="{{route('categoria.index')}}" class="btn btn-secondary">Cancelar</a>

@endsection
