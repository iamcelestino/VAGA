<?php

namespace App\Controllers;
use App\Core\Controller;

class Empresa extends Controller
{
    public function index(): void
    {
        $this->view('empresas');
    }

    public function detalhes(int $id = null): void 
    {
        $this->view('detalhes_empresa');
    }
}