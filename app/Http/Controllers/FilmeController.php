<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmeFormRequest;
use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{

    // Cadastro de filme
    public function cadastroFilme(FilmeFormRequest $request)
    {
     
        $filme = Filme::create([

            'titulo' => $request->titulo , 
            'diretor' => $request->diretor,
            'genero' => $request->genero,
            'dt_lancamento' => $request->dt_lancamento,
            'duracao' => $request->duracao,
            'sinopse' => $request->sinopse,
            'elenco' => $request->elenco,
            'classificacao' => $request->classificacao,
            'plataformas' => $request->plataformas,
        ]);
        return response()->json([
            "success" => true,
            "message" => "Cadastrado com sucesso",
            "data" => $filme
        ], 200);
    }

    



public function pesquisa(Request $request)
{
    $query = Filme::query();

    $query->where(function ($q) use ($request) {
        $q->where('sinopse', 'like', '%' . $request->input('pesquisa') . '%')
          ->orWhere('genero', 'like', '%' . $request->input('pesquisa') . '%');
    })
    ->where('titulo', 'like', '%' . $request->input('pesquisa') . '%');

    $filmes = $query->get();

    if (count($filmes) > 0) {
        return response()->json([
            'status' => true,
            'data' => $filmes
        ]);
    }

    return response()->json([
        'status' => false,
        'data' => "Nenhum resultado encontrado"
    ]);
}








}
