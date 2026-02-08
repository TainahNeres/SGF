<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstituicaoController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\OrcamentoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/instituicoes', [InstituicaoController::class, 'index'])->name('instituicoes.index');
Route::get('/instituicoes/novo', [InstituicaoController::class, 'create'])->name('instituicoes.create');
Route::post('/instituicoes', [InstituicaoController::class, 'store'])->name('instituicoes.store');

Route::get('/campi', [CampusController::class, 'index'])->name('campi.index');
Route::get('/campi/novo', [CampusController::class, 'create'])->name('campi.create');
Route::post('/campi', [CampusController::class, 'store'])->name('campi.store');

Route::get('/setores', [SetorController::class, 'index'])->name('setores.index');
Route::get('/setores/novo', [SetorController::class, 'create'])->name('setores.create');
Route::post('/setores', [SetorController::class, 'store'])->name('setores.store');

Route::get('/orcamentos', [OrcamentoController::class, 'index'])->name('orcamentos.index');
Route::get('/orcamentos/novo', [OrcamentoController::class, 'create'])->name('orcamentos.create');
Route::post('/orcamentos', [OrcamentoController::class, 'store'])->name('orcamentos.store');
