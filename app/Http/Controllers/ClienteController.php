<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Cliente::create($request->all()))
            return redirect()->route('clientes.index')->with('mensagem', 'Cadastro realizado com sucesso!');
        else
            return redirect()->route('clientes.index')->with('mensagem', 'Erro, cadastro não realizado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        if($cliente->update($request->all()))
            return redirect()->route('clientes.index')->with('mensagem', 'Imóvel alterado com sucesso!');
        else
            return redirect()->route('clientes.index')->with('mensagem', 'Erro ao alterar o imóvel!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        if($cliente->delete())
            return redirect()->route('clientes.index')->with('mensagem', 'Imóvel exluído com sucesso!');
        else
            return redirect()->route('clientes.index')->with('mensagem', 'Erro ao excluir o imóvel!');
    }
    
}
