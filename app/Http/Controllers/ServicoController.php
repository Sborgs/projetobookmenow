<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Servico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\fileExists;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicos = Servico::paginate(10);
        return view('admin.servicos.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'celular' => 'required|string|max:20',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'usuario_id' => 'required',
            'categoria_id' => 'required',
        ]);


        $servico = Servico::create($request->all());

        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                $caminhoFoto = $file->store('fotos', 'public');
                Foto::create([
                    'servico_id' => $servico->id,
                    'imagem' => $caminhoFoto
                ]);
            }
        }

        return redirect()->route('servico.index')->with('success', 'Cadastro realizado com Sucesso!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.servicos.visualizar', compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.servicos.editar', compact('servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:100',
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'celular' => 'required|string|max:20',
            'endereco' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required',
            'usuario_id' => 'required',
            'categoria_id' => 'required',
        ]);

        $servico = Servico::findorFail($id);

        $servico->update([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'celular' => $request->celular,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
            'usuario_id' => $request->usuario_id,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('servico.index')->with('sucesso', 'Serviço atualizado com sucesso!!!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $servico = Servico::findOrFail($id);


            if ($servico->fotos) {
                foreach ($servico->fotos as $foto) {

                    $filepath = storage_path('app/public/' . $foto->imagem);

                    if (fileExists($filepath)) {
                        unlink($filepath);
                    }

                    $foto->delete();
                }
            }

            $servico->delete();

            return redirect()->route('servico.index')->with('sucesso', 'Serviço deletado com sucesso!!!');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('servico.index')->with('error', 'Erro ao deletar o serviço');
        }
    }
}
