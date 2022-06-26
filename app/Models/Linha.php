<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linha extends Model
{
    use HasFactory;
    /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
    protected $fillable = [
        'empresa_id',
        'nome',
        'numero',
        'tempo_de_espera',
        'valor',
        'cidade_id',
        'aviso',
    ];

    public function paradas() {
        return $this->hasMany(Linhaeparada::class);
    }
    public function horarios() {
        return $this->hasMany(Horario::class);
    }
    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }
    public function empresa() {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function getValorAttribute($date)
    {
        return $date;
    }
}
