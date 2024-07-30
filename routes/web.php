<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

route::get('/',[SiteController::class, "home"])->name("site.home");
route::get('/sobre-nos',[SiteController::class, "sobreNos"])->name("site.sobrenos");
route::get('/contato',[SiteController::class, "contato"])->name("site.contato");

//Rotas da Seção Usuário
route::get('/admin/usuarios',[UsuarioController::class, "index"])->name("usuario.index");
Route::get('/admin/usuarios/cadastrar',[UsuarioController::class, "create"])->name("usuario.create");
Route::get('/admin/usuarios/editar/{id}',[UsuarioController::class, "edit"])->name("usuario.editar");
Route::get('/admin/usuarios/visualizar/{id}',[UsuarioController::class, "show"])->name("usuario.show");
Route::post('/admin/usuarios/cadastrar/salvar',[UsuarioController::class, "store"])->name("usuario.store");
route::put('/admin/usuarios/atualizar/{id}', [UsuarioController::class, "update"])->name("usuario.update");
route::delete('/admin/usuarios/deletar/{id}', [UsuarioController::class, "destroy"])->name("usuario.destroy");

//Rotas da Seção Categorias
route::get('/admin/categorias',[CategoriaController::class, "index"])->name("categoria.index");
Route::get('/admin/categorias/cadastrar',[CategoriaController::class, "create"])->name("categoria.create");
Route::get('/admin/categorias/editar/{id}',[CategoriaController::class, "edit"])->name("categoria.editar");
Route::get('/admin/categorias/visualizar/{id}',[CategoriaController::class, "show"])->name("categoria.show");
Route::post('/admin/categorias/cadastrar/salvar',[CategoriaController::class, "store"])->name("categoria.store");
route::put('/admin/categorias/atualizar/{id}', [CategoriaController::class, "update"])->name("categoria.update");
route::delete('/admin/categorias/deletar/{id}', [CategoriaController::class, "destroy"])->name("categoria.destroy");




//Rotas da Seção Dashboard
route::get('/admin/dashboard',[DashboardController::class, "dashboard"])->name("dashboard");
