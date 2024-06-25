@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Usuarios</h2>
    </div>

    <hr>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>1</td>
        </tr>
        <tr>
            <th>Nome</th>
            <td>Edson Rodrigues</td>
        </tr>
        <tr>
            <td>1</td>

            <th>E-mail</th>
            <td>edsonrb.2008@gmail.com</td>
        </tr>
    </table>

    <a href="/admin/usuarios/" class="btn btn-primary">Editar</a>
    <a href="/admin/usuarios/" class="btn btn-secondary">Cancelar</a>

@endsection
