<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = ['nome', 'instituicao_id'];
    protected $table = 'campi';

    public function instituicao()
    {
        return $this->belongsTo(Instituicao::class);
    }
}
