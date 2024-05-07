<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;
Route::post('cadastro/Filme', [FilmeController::class, 'cadastroFilme']);
Route::post('pesquisa/Filme', [FilmeController::class, 'pesquisa']);