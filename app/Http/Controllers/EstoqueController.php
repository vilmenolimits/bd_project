<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
     public function index()
    {
        return Estoque::all();
    }

    public function store(Request $request)
    {
        $estoque = Estoque::create($request->all());
        return response()->json($estoque, 201);
    }

    public function show($id)
    {
        return Estoque::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $estoque = Estoque::findOrFail($id);
        $estoque->update($request->all());
        return response()->json($estoque, 200);
    }

    public function destroy($id)
    {
        Estoque::destroy($id);
        return response()->json(null, 204);
    }
}
