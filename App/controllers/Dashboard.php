<?php

namespace App\Controllers;
use App\Core\Controller;

class Dashboard extends Controller
{
    public function index(): void
    {

    }

    public function empresa(): void
    {
        $emprego = $this->load_model('Emprego');
        $dados_empregos  = $emprego->findAll();

        $this->view('empresa_dashboard', [
            'empregos' => $dados_empregos
        ]);
    }

    public function escola(): void
    {

    }

    public function estudante(): void
    {

    }
}