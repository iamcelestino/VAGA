<?php

namespace App\Controllers;
use App\Core\Controller;

class Perfil extends Controller
{
    public function index(int $id = null): void
    {   
        $usuario = $this->load_model('Empresa');
        $dados_usuario = $usuario->first('id_usuario', $id);
        
        dd($dados_usuario);
        $this->view('perfil', [
            'usuario' => $dados_usuario
        ]);
    }
}