<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

     protected $fillable = ['cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produtos()
    {
        return $this->belongsToMany(Produto::class, 'item_pedido', 'pedido_id', 'produto_id')
                    ->withPivot('quantidade');
    }

    public function venda()
    {
        return $this->hasOne(Venda::class);
    }
}
