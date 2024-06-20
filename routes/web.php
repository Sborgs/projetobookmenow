<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\Route;

route::get('/',[SiteController::class, "home"]);
route::get('/sobre-nos',[SiteController::class, "sobreNos"]);
route::get('/contato',[SiteController::class, "contato"]);

route::get('/admin/usuarios',[UsuarioController::class, "index"]);
Route::get('/admin/usuarios/{id}',[UsuarioController::class, "show"]);
route::get('/admin/dashboard',[DashboardController::class, "dashboard"]);
