<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use Illuminate\Http\Request;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource. - Listar
     */
    public function index()
    {
        $gastos = Gasto::all();

        return view('gastos.index', compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0.01',
            'categoria' => 'required|string|max:255',
            'data' => 'required|date', 
        ]);

        Gasto::create($dados);

        return redirect()
            ->route('gastos.index')
            ->with('success', 'Gasto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gasto = Gasto::findOrFail($id);

        return view('gastos.edit', compact('gasto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $request->validate([
        'descricao' => 'required|string|max:255',
        'valor' => 'required|numeric|min:0.01',
        'categoria' => 'required|string|max:255',
        'data' => 'required|date',
        ]);

        $gasto = Gasto::findOrFail($id);

        $gasto->update($dados);

        return redirect()
            ->route('gastos.index')
            ->with('success', 'Gasto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gasto = Gasto::findOrFail($id);

        $gasto->delete();

        return redirect()
            ->route('gastos.index')
            ->with('success', 'Gasto excluído com sucesso!');
    }
}
