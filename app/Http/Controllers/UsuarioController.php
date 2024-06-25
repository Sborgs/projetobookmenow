<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  
    public function index()
    {
        return view('admin.usuarios.index');
    }

    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return view('admin.usuarios.visualizar');
    }

    public function edit(string $id)
    {
        return view('admin.usuarios.editar');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
