<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

     protected $fillable = [
        'nome',
        'preco',
        'categoria_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(ProdutoCategoria::class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'item_pedido', 'produto_id', 'pedido_id')
                    ->withPivot('quantidade');
    }

    public function estoque()
    {
        return $this->hasMany(Estoque::class);
    }
}
