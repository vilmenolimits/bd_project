<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

        protected $fillable = [
        'pedido_id',
        'valor_pago',
        'data_pagamento',
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
