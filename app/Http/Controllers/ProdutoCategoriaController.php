<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoCategoriaController extends Controller
{
      public function index()
    {
        return ProdutoCategoria::all();
    }

    public function store(Request $request)
    {
        $categoria = ProdutoCategoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function show($id)
    {
        return ProdutoCategoria::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $categoria = ProdutoCategoria::findOrFail($id);
        $categoria->update($request->all());
        return response()->json($categoria, 200);
    }

    public function destroy($id)
    {
        ProdutoCategoria::destroy($id);
        return response()->json(null, 204);
    }
}
