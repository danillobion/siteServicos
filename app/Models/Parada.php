<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parada extends Model
{
    use HasFactory;
    /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
    protected $fillable = [
        'rua',
        'numero',
        'latitude',
        'longitude',
    ];

    public function linhas() {
        return $this->belongsTo("\App\Linhaeparada");
    }
}
