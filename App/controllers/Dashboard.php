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
        $this->view('empresa_dashboard', [
        ]);
    }

    public function escola(): void
    {
        $this->view('escola_dashboard');
    }

    public function estudante(): void
    {
        $this->view('estudante_dashboard');
    }
}