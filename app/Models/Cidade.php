<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','nome','uf'
    ];

    public function empresas() {
        return $this->belongsToMany(Empresa::class);
    }

    public function linhas() {
        return $this->hasMany(Linha::class);
    }
}
