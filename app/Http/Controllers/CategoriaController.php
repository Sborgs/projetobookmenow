<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('admin.categorias.index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categoria.cadastrar');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required|string',
        ]);


        Categoria::create([
            'titulo' => $request->titulo,
            'imagem' => $request->imageName,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categoria.index')->with('sucesso', 'Categoria cadastrada com sucesso!!!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.visualizar', compact('categoria'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.editar', compact('categoria'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required|string',
        ]);

        $categoria = Categoria::findOrFail($id);

        $categoria->update([
            'titulo' => $request->titulo,
            'imagem' => $request->imageName,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('categoria.index')->with('sucesso', 'Categoria cadastrada com sucesso!!!');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $categoria = Categoria::findOrFail($id);
            $categoria->delete();
            return redirect()->route('categoria.index')->with('sucesso', 'Categoria deletada com sucesso!!!');
        } catch (\Exception $e) {

            return redirect()->route('categoria.index')->with('error', 'Erro ao deletar a categoria!!!');
        }

    }

}