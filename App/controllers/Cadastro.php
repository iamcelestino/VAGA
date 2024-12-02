<?php

namespace App\Controllers;
use App\Core\Controller;

class Cadastro extends Controller
{
    public function index()
    {
        $this->view('cadastro');
    }
}