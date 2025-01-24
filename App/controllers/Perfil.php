<?php

namespace App\Controllers;
use App\Core\Controller;

class Perfil extends Controller
{
    public function index(int $id = null): void
    {   
        $usuario = $this->load_model('Empresa');
        $dados_usuario = $usuario->first('id_usuario', $id);

        $this->view('perfil', [
            'usuario' => $dados_usuario
        ]);
    }

    public function editar(int $id = null): void
    {

        $this->view('editar_perfil');
    }
}