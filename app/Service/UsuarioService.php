<?php

namespace App\Service;

use App\Models\Usuario;

// criando o CUD + alguns outras funções que são comuns.
class UsuarioService 
{
    
    public function create(array $dados){
        $user = Usuario::create([
        'nome' => $dados ['nome'],
        'email' => $dados ['email'],
        'password' => $dados ['password']
     ]);

     return $user;
     
    }

    public function update(){

    }

    public function delete(){

    }

    public function findById(){

    }
    // Buscar o registro, vai aparecer tudo o que tiver na tabela.
    public function getALL(){

    }

    public function searchByName(){

    }


}