<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('marcas.index', compact('marcas'));
    }

    public function show($id)
    {
        $marca = Marca::find($id);
        return view('marcas.show', compact('marca'));
    }

    public function create()
    {
        return view('marcas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
        ]);

        Marca::create([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('marcas.index')->with('success', 'Marca criada com sucesso.');
    }

    public function edit($id)
    {
        $marca = Marca::find($id);
        return view('marcas.edit', compact('marca'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required',
            'descricao' => 'required',
        ]);

        $marca = Marca::find($id);
        $marca->update([
            'codigo' => $request->codigo,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('marcas.index')->with('success', 'Marca atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $marca = Marca::find($id);
        $marca->delete();

        return redirect()->route('marcas.index')->with('success', 'Marca excluída com sucesso.');
    }
}
