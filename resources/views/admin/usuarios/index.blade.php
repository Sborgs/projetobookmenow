@extends('admin.dashboard')


@section('conteudo')

<div class="d-flex justify-content-between mt-3">
    <h2>Lista de Usuarios</h2>
    <a href="{{route('usuario.create')}}" class="btn btn-primary">Cadastrar</a>
</div>

<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>

            <th>Nome</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>

            <td>Edson Rodrigues</td>
            <td>edson@teste.com.br</td>
            <td>
                <a href="{{route('usuario.show', ['id' => 1])}}" class="btn btn-primary">Visualizar</a>
                <a href="{{route('usuario.editar', ['id' => 1])}}" class="btn btn-secondary">Editar</a>
                <a href="deletar.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        <tr>
            <td>1</td>

            <td>Edson Rodrigues</td>
            <td>edson@teste.com.br</td>
            <td>
                <a href="#" class="btn btn-primary">Visualizar</a>
                <a href="editar.php" class="btn btn-secondary">Editar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection