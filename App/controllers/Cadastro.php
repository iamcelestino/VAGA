<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Usuario;


class Cadastro extends Controller
{
    public mixed $usuario;
    public array $errors = [];

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index()
    {   
        if(count($_POST) > 0) {
            
            if($this->usuario->validate($_POST)) {

                $this->usuario->insert($_POST);
                $this->redirect('login');

            }else {
               die;
            }
        }

        $this->view('cadastro', [
            'errors' => $this->errors
        ]);
    }
}