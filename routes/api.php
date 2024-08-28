<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// UsuarioController é uma classe que nós criamos, ela está sendo criada na aba de UsuarioController.php
Route::post('/usuario', [UsuarioController::class, 'store']);

Route::get('/usuario/{id}/find',
[UsuarioController::class, 'findById']);

Route::get('/usuario',
[UsuarioController::class, 'index']);

Route::get('/usuario/search',
[UsuarioController::class, 'searchByName']);

Route::get('/usuario/email',
[UsuarioController::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete',
[UsuarioController::class, 'delete']);

Route::put('/usuario',
[UsuarioController::class, 'update']);