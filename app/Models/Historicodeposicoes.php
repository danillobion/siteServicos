<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historicodeposicoes extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'linha_id',
        'usuario_id',
        'latitude',
        'longitude',
        'accuracy',
        'timestamp',
        'tipo'
    ];
}
