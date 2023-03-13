<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use App\Http\Requests\StoreVagaRequest;
use App\Http\Requests\UpdateVagaRequest;
use App\Models\Candidato;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = Vaga::all();

        return view('vagas.index', ['vagas' => $vagas])->render();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $linguagens = file_get_contents('json/programacao.json');
        $linguagens = json_decode($linguagens);

        return view('vagas.create', ['linguagens' => $linguagens]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVagaRequest $request)
    {
        $vaga = new Vaga();
        $vaga->nome = $request->nome;
        $vaga->habilidades = $request->habilidades;
        $vaga->save();

        return redirect()->route('vaga.index')->with('msg_alert', 'Vaga Cadastrada com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vaga = Vaga::findOrFail($id);

        $candidatos = Candidato::candidatoDisponivel($vaga->habilidades);

        return view('vagas.show', ['vaga' => $vaga, 'candidatos' => $candidatos])->render();
    }

    /**
     * Display available jobs by applicants.
     */
    public function disponivel()
    {
        $vagas = Vaga::all();
        foreach ($vagas as $key => $vaga) {
            $vaga->candidatos = Candidato::candidatoDisponivel($vaga->habilidades);
        }

        return view('vagas.disponivel', ['vagas' => $vagas])->render();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vaga = Vaga::findOrFail($id);
        $linguagens = file_get_contents('json/programacao.json');
        $linguagens = json_decode($linguagens);

        return view('vagas.edit', ['vaga' => $vaga, 'linguagens' => $linguagens])->render();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVagaRequest $request,$id)
    {
        $vaga = Vaga::findOrFail($id);
        $vaga->nome = $request->nome;
        $vaga->habilidades = $request->habilidades;
        $vaga->save();

        return redirect()->route('vaga.index')->with('msg_alert', 'Vaga Atualizada com Sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Vaga::findOrFail($id)->delete();

        return redirect()->route('vaga.index')->with('msg_alert', 'Vaga Deletada com Sucesso');
    }
}
