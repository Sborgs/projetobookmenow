@extends('admin.dashboard')
 
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuarios</h2>
 
    </div>
 
    <hr>
    <form action="{{ route('usuario.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome"  class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome">            
        </div>
 
        <div class="mb-3">
            <label for="email"  class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Seu email">            
        </div>
 
        <div class="mb-3">
            <label for="senha"  class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Sua senha">            
        </div>
 
        <div class="mb-3">
            <label for="senha_confirme"  class="form-label">Comfirme a senha</label>
            <input type="password" name="senha_confirme" class="form-control" id="senha_confirme" placeholder="Confirme sua senha">            
        </div>
       
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route("usuario.index")}}" class="btn btn-secondary">Cancelar</a>
   
    </form>
 
 
@endsection