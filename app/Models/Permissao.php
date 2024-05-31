<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissao extends Model
{
    use HasFactory;

      public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_permissao', 'permissao_id', 'usuario_id');
    }
}
