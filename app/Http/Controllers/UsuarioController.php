<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
  
    public function index()
    {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.usuarios.cadastrar');
    }

    public function store(Request $request)
    {
        User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->senha)
        ]);

        return redirect()->route('usuario.index');
    }

    public function show(string $id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.visualizar', compact('usuario'));
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
