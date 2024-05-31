<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
     public function index()
    {
        return ItemPedido::all();
    }

    public function store(Request $request)
    {
        $itemPedido = ItemPedido::create($request->all());
        return response()->json($itemPedido, 201);
    }

    public function show($pedido_id, $produto_id)
    {
        return ItemPedido::where('pedido_id', $pedido_id)
                         ->where('produto_id', $produto_id)
                         ->firstOrFail();
    }

    public function update(Request $request, $pedido_id, $produto_id)
    {
        $itemPedido = ItemPedido::where('pedido_id', $pedido_id)
                                ->where('produto_id', $produto_id)
                                ->firstOrFail();
        $itemPedido->update($request->all());
        return response()->json($itemPedido, 200);
    }

    public function destroy($pedido_id, $produto_id)
    {
        ItemPedido::where('pedido_id', $pedido_id)
                  ->where('produto_id', $produto_id)
                  ->delete();
        return response()->json(null, 204);
    }
}
