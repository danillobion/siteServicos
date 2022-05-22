<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidadeeempresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'cidade_id',
        'empresa_id',
    ];

    public function cidades() {
        return $this->belongsToMany(Empresa::class);
    }
}
