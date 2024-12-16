<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Usuario, Empresa};


class Cadastro extends Controller
{
    public mixed $usuario;
    public mixed $empresa;
    public array $errors = [];

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->empresa = new Empresa();
    }

    public function index()
    {   
        if (count($_POST) > 0) {

            if ($this->usuario->validate($_POST)) {
                $this->usuario->insert($_POST);
            } else {
                die; 
            }
    
            if ($_POST['tipo_usuario'] == 'empresa') {

                $dados_empresa = [
                    'NIF' => $_POST['NIF'] ?? null,
                    'sector' => $_POST['sector'] ?? null,
                ];

                if ($this->empresa->validar($dados_empresa)) {
                    $this->empresa->insert($dados_empresa);
                    $this->redirect('login');
                } else {
                    $this->errors = $this->empresa->errors;
                    dd($this->errors); 
                }
            }
        }
        $this->view('cadastro', [
            'errors' => $this->errors
        ]);
    }
}