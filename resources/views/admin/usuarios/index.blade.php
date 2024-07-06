@extends('admin.dashboard')


@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Usuarios</h2>
        <a href="{{ route('usuario.create') }}" class="btn btn-primary">Cadastrar</a>
    </div>

    <hr>

    @if (@session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}

        </div>
    @endif


    @if (@session('error'))
        <div class="alert alert-success">
            {{ session('error') }}

        </div>
    @endif

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
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>

                    <td>
                        <a href="{{ route('usuario.show', ['id' => $user->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('usuario.editar', ['id' => $user->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('usuario.destroy', ['id' => $user->id]) }}" method="post"
                            style="display: inline-block">

                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $usuarios->links() }}

    <script>
        function confirmDeletion(form) {
            alert('Você está prestes a excluir um registro.');
            const confirmation = confirm('Deseja realmente excluir o registro?');
            if (confirmation) {
                form.submit();
            }
        }
    </script>
@endsection
