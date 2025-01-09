<?php

namespace App\Controllers;
use App\Core\Controller;

class home extends Controller 
{
    public function index() 
    {
        $usuario = $this->load_model('Usuario');
        $usuarios = $usuario->findAll();

        $this->view('home', [
            'usuarios' => $usuarios
        ]);
    }
}