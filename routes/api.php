<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;






// -------------------------Teste:-------------------------------------------
route::post('filmes/cadastro', [FilmeController::class, 'cadastroFilme']);
route::get('filmes/listagem', [filmeController::class, 'retornarTodosFilmes']);
route::get('filmes/pesquisar', [filmeController::class, 'pesquisaFilme']);
route::delete('filmes/delete/{id}', [filmeController::class, 'deletarFilme']);
route::put('filmes/update', [filmeController::class, 'updatefilmes']);




// ----------------ADM--------------------------------------------------------
//FILMES:
route::post('adm/filmes/cadastro', [FilmeController::class, 'cadastroFilme']);
route::get('adm/filmes/listagem', [filmeController::class, 'retornarTodos']);
route::get('adm/filmes/pesquisar', [filmeController::class, 'pesquisa']);
route::delete('adm/filmes/delete/{id}', [filmeController::class, 'deletarFilme']);
route::put('adm/filmes/update', [filmeController::class, 'updatefilmes']);

//SERIE:
route::post('adm/serie/cadastro', [FilmeController::class, 'cadastroSeries']);
route::get('adm/serie/listagem', [filmeController::class, 'retornarTodosSeries']);
route::get('adm/serie/pesquisar', [filmeController::class, 'pesquisaSerie']);
route::delete('adm/serie/delete/{id}', [filmeController::class, 'deletarSerie']);
route::put('adm/serie/update', [filmeController::class, 'updateSerie']);


//ANIMCAO:
route::post('adm/animacao/cadastro', [FilmeController::class, 'cadastroAnimacao']);
route::get('adm/animacao/listagem', [filmeController::class, 'retornarTodosAnimaca']);
route::get('adm/animacao/pesquisar', [filmeController::class, 'pesquisa']);
route::delete('adm/animacao/delete/{id}', [filmeController::class, 'deletarAnimacao']);
route::put('adm/animacao/update', [filmeController::class, 'updateanimacao']);




//--------------------Usuario------------------------------------------------------
route::post('usuario/cadastro', [FilmeController::class, 'cadastroUsuario']);
route::put('usuario/update', [filmeController::class, 'updateanimacao']);
