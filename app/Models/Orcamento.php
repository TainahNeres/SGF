<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'orcamentos';
    protected $fillable = [
        'instituicao_id',
        'campus_id',
        'setor_id',
        'valor_estimado',
        'valor_disponivel',
        'ano'
    ];
}
