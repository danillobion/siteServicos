<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id','nome',
    ];

    protected $hidden = ['pivot'];

    public function usuarios() {
        return $this->belongsTo("\App\User");
    }
    public function linhas() {
        return $this->hasMany(Linha::class);
    }
    public function cidades() {
        return $this->hasMany(Cidade::class);
    }
}
