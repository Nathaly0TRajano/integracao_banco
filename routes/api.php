<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// UsuarioController é uma classe que nós criamos, ela está sendo criada na aba de UsuarioController.php
Route::post('/usuario', [UsuarioController::class, 'store']);