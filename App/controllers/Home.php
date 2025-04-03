<?php

namespace App\Controllers;
use App\Core\Controller;

class home extends Controller 
{
    public function index() 
    {
        $usuario = $this->load_model('Usuario');
        $usuarios = $usuario->findAll();

        $emprego = $this->load_model('Emprego');
        $empregos = $emprego->findAll();

        $this->view('home', [
            'usuarios' => $usuarios,
            'empregos' => $empregos
        ]);

    }
}