@extends('admin.dashboard')


@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Categorias</h2>
        <a href="{{ route('categoria.create') }}" class="btn btn-primary">Cadastrar</a>
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

                <th>Titulo</th>
                <th>Imagem</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->titulo }}</td>
                    <td>{{ $categoria->imagem }}</td>
                    <td>{{ $categoria->descricao }}</td>
                    <td></td>

                    <td>
                        <a href="{{ route('categoria.show', ['id' => $categoria->id]) }}" class="btn btn-primary">Visualizar</a>
                        <a href="{{ route('categoria.editar', ['id' => $categoria->id]) }}" class="btn btn-secondary">Editar</a>

                        <form action="{{ route('categoria.destroy', ['id' => $categoria->id]) }}" method="post"
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

    {{ $categorias->links() }}

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
