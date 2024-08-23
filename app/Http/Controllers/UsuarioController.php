<?php

namespace App\Http\Controllers;

use App\Service\UsuarioService;
use Illuminate\Http\Request;

// Quando chamar a classe controller, o que está dentro dessa aba, vai ser executado, então a função vai pegar todas
/*
as informações recebidas no novoUsuarioService vão ser usadas pela classe do '$usuarioService'.

*/
class UsuarioController extends Controller
{
    protected $usuarioService;

    public function __construct(UsuarioService $novoUsuarioService)
    {
        $this->usuarioService = $novoUsuarioService;
    }
    // Aqui é a mesma coisa que no de cima, estamos usando as coisas do Request com a variavel request.
    public function store(Request $request){
        $user = $this->usuarioService->create($request->all());

        return $user; 
    }

}
