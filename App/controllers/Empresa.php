<?php

namespace App\Controllers;
use App\Core\Controller;

class Empresa extends Controller
{
    public function index()
    {
        $this->view('empresas');
    }

    public function detalhes() {
        $this->view('detalhes_empresa');
    }
}