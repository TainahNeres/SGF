<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = ['nome'];
    protected $table = 'instituicao';

    public function campi()
    {
        return $this->hasMany(Campus::class);
    }
}
