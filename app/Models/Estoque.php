<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'produto_id',
        'tipo_quantidade',
        'quantidade',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
