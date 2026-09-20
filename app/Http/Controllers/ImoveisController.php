<?php

namespace App\Http\Controllers;

use App\Models\Imoveis;
use Illuminate\Http\Request;

class ImoveisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imoveis = Imoveis::all();
        return view('imovel.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('imovel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Imoveis::create($request->all()))
            return redirect()->route('/imoveis')->with('mensagem', 'Cadastro realizado com sucesso!');
        else
            return redirect()->route('/imoveis')->with('mensagem', 'Erro, cadastro não realizado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $imovel = Imoveis::findOrFail($id);
        return view('imovel.show', compact('imoveis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $imovel = Imoveis::findOrFail($id);
        return view('imovel.edit', compact('imoveis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imovel = Imoveis::findOrFail($id);
        if($imovel->update($request->all()))
            return redirect()->route('/imoveis')->with('mensagem', 'Imóvel alterado com sucesso!');
        else
            return redirect()->route('/imoveis')->with('mensagem', 'Erro ao alterar o imóvel!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imovel = Imoveis::findOrFail($id);
        if($imovel->delete())
            return redirect()->route('/imoveis')->with('mensagem', 'Imóvel exluído com sucesso!');
        else
            return redirect()->route('/imoveis')->with('mensagem', 'Erro ao excluir o imóvel!');
    }
}
