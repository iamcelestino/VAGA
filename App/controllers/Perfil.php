<?php

namespace App\Controllers;
use App\Core\Controller;
use App\core\Database;

class Perfil extends Controller
{
    public function index(int $id = null): void
    {   
        
        $this->view('perfil', []);
    }
}