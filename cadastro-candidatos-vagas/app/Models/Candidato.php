<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $casts = [
        'habilidades' => 'array'
    ];

    protected static function candidatoDisponivel($habilidades)
    {
        $candidatos = Candidato::all();
        $candidatoDisponivel = [];

        foreach ($candidatos as $key => $candidato) {
            $habilidadesCompativeis = array_intersect($habilidades, $candidato->habilidades);
            if (count($habilidadesCompativeis)>=3) {
                array_push($candidatoDisponivel, $candidato);
            }
        }
        return $candidatoDisponivel;
    }
}
