<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PermissaoController;
use App\Http\Controllers\UsuarioPermissaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ItemPedidoController;
use App\Http\Controllers\ProdutoCategoriaController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\VendaController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('permissoes', PermissaoController::class);
Route::resource('usuario-permissoes', UsuarioPermissaoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('item-pedidos', ItemPedidoController::class);
Route::resource('produto-categorias', ProdutoCategoriaController::class);
Route::resource('estoques', EstoqueController::class);
Route::resource('vendas', VendaController::class);



/*
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);
*/

use App\Livewire\UsuarioComponent;

Route::get('mm', UsuarioComponent::class)->name('usuarios.index');

//Permissao
Route::get('permissoes', [PermissaoController::class, 'index']);
Route::post('permissoes', [PermissaoController::class, 'store']);
Route::get('permissoes/{id}', [PermissaoController::class, 'show']);
Route::put('permissoes/{id}', [PermissaoController::class, 'update']);
Route::delete('permissoes/{id}', [PermissaoController::class, 'destroy']);


//UsuarioPermissao
Route::get('permissoes', [PermissaoController::class, 'index']);
Route::post('permissoes', [PermissaoController::class, 'store']);
Route::get('permissoes/{id}', [PermissaoController::class, 'show']);
Route::put('permissoes/{id}', [PermissaoController::class, 'update']);
Route::delete('permissoes/{id}', [PermissaoController::class, 'destroy']);

//Cliente
Route::get('clientes', [ClienteController::class, 'index']);
Route::post('clientes', [ClienteController::class, 'store']);
Route::get('clientes/{id}', [ClienteController::class, 'show']);
Route::put('clientes/{id}', [ClienteController::class, 'update']);
Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

//Pedido
Route::get('pedidos', [PedidoController::class, 'index']);
Route::post('pedidos', [PedidoController::class, 'store']);
Route::get('pedidos/{id}', [PedidoController::class, 'show']);
Route::put('pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('pedidos/{id}', [PedidoController::class, 'destroy']);

//Produto
Route::get('produtos', [ProdutoController::class, 'index']);
Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos/{id}', [ProdutoController::class, 'show']);
Route::put('produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);

//ItemPedido
Route::get('item-pedidos', [ItemPedidoController::class, 'index']);
Route::post('item-pedidos', [ItemPedidoController::class, 'store']);
Route::get('item-pedidos/{pedido_id}/{produto_id}', [ItemPedidoController::class, 'show']);
Route::put('item-pedidos/{pedido_id}/{produto_id}', [ItemPedidoController::class, 'update']);
Route::delete('item-pedidos/{pedido_id}/{produto_id}', [ItemPedidoController::class, 'destroy']);


//ProdutoCategoria
Route::get('produto-categorias', [ProdutoCategoriaController::class, 'index']);
Route::post('produto-categorias', [ProdutoCategoriaController::class, 'store']);
Route::get('produto-categorias/{id}', [ProdutoCategoriaController::class, 'show']);
Route::put('produto-categorias/{id}', [ProdutoCategoriaController::class, 'update']);
Route::delete('produto-categorias/{id}', [ProdutoCategoriaController::class, 'destroy']);


//Estoque
Route::get('estoques', [EstoqueController::class, 'index']);
Route::post('estoques', [EstoqueController::class, 'store']);
Route::get('estoques/{id}', [EstoqueController::class, 'show']);
Route::put('estoques/{id}', [EstoqueController::class, 'update']);
Route::delete('estoques/{id}', [EstoqueController::class, 'destroy']);

//Venda
Route::get('vendas', [VendaController::class, 'index']);
Route::post('vendas', [VendaController::class, 'store']);
Route::get('vendas/{id}', [VendaController::class, 'show']);
Route::put('vendas/{id}', [VendaController::class, 'update']);
Route::delete('vendas/{id}', [VendaController::class, 'destroy']);


Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';




Route::resource('usuarios', UsuarioController::class);
Route::resource('permissoes', PermissaoController::class);
Route::resource('usuario-permissoes', UsuarioPermissaoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('item-pedidos', ItemPedidoController::class);
Route::resource('produto-categorias', ProdutoCategoriaController::class);
Route::resource('estoques', EstoqueController::class);
Route::resource('vendas', VendaController::class);

