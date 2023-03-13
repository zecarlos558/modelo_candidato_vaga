<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use App\Http\Requests\StoreCandidatoRequest;
use App\Http\Requests\UpdateCandidatoRequest;
use App\Models\Vaga;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidatos = Candidato::all();

        return view('candidatos.index', ['candidatos' => $candidatos])->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $linguagens = file_get_contents('json/programacao.json');
        $linguagens = json_decode($linguagens);

        return view('candidatos.create', ['linguagens' => $linguagens]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCandidatoRequest $request)
    {
        $candidato = new Candidato();
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();

        return redirect()->route('candidato.index')->with('msg_alert', 'Candidato Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $candidato = Candidato::findOrFail($id);

        $vagas = Vaga::vagaDisponivel($candidato->habilidades);

        return view('candidatos.show', ['candidato' => $candidato, 'vagas' => $vagas])->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $candidato = Candidato::findOrFail($id);
        $linguagens = file_get_contents('json/programacao.json');
        $linguagens = json_decode($linguagens);

        return view('candidatos.edit', ['candidato' => $candidato, 'linguagens' => $linguagens])->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidatoRequest $request, $id)
    {
        $candidato = Candidato::findOrFail($id);
        $candidato->nome = $request->nome;
        $candidato->habilidades = $request->habilidades;
        $candidato->save();

        return redirect()->route('candidato.index')->with('msg_alert', 'Candidato Atualizado com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Candidato::findOrFail($id)->delete();

        return redirect()->route('candidato.index')->with('msg_alert', 'Candidato Deletado com Sucesso');
    }
}
