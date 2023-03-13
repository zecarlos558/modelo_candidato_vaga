<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $casts = [
        'habilidades' => 'array'
    ];

    protected static function vagaDisponivel($habilidades)
    {
        $vagas = Vaga::all();
        $vagaDisponivel = [];

        foreach ($vagas as $key => $vaga) {
            $habilidadesCompativeis = array_intersect($habilidades, $vaga->habilidades);
            if (count($habilidadesCompativeis)>=3) {
                array_push($vagaDisponivel, $vaga);
            }
        }
        return $vagaDisponivel;
    }
}
