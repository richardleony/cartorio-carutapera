<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('welcome'); // Rota padrão da página inicial do Laravel
});

// Rotas para Serviços
Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');

// Rotas para Notícias
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'show'])->name('noticias.show');

// Rotas para Contatos
Route::get('/contato', [ContatoController::class, 'exibirFormulario'])->name('contato.index');
Route::post('/contato', [ContatoController::class, 'enviarFormulario'])->name('contato.enviar');