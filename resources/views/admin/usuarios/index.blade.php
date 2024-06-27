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

        @foreach ($usuarios as $user)
                    
        <tr>
            <td>{{$user->is}}</td>
            <td>{{$user->nome}}</td>
            <td>{{$user->email}}</td>

            <td>
                <a href="{{route('usuario.show', ['id' => $user->id])}}" class="btn btn-primary">Visualizar</a>
                <a href="{{route('usuario.editar', ['id' => $user->id])}}" class="btn btn-secondary">Editar</a>
                <a href="deletar.php" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection