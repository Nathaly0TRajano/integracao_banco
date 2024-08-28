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

    public function findById($id){
        $result = $this->usuarioService->findById($id);

        return response()->json($result);
    }

    public function index(){
        $result = $this->usuarioService->getALL();
        return response()->json($result);
    }

    public function searchByName(Request $request){
        $result = $this->usuarioService->searchByName($request->nome);
        return response()->json($result);
        
    }

    public function searchByEmail(Request $request){
        $result = $this->usuarioService->searchByEmail($request->email);
        return response()->json($result);
    }

    public function delete($id){
        $result = $this->usuarioService->delete($id);
        return response()->json($result);
    }

    public function update(Request $request){
        $result = $this->usuarioService->update($request->all());
        return response()->json($result);
    }
}
