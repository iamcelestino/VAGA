<?php

namespace App\Controllers;
use App\Core\{Controller, Database};
use App\Model\{Usuario, Endorsamento};

class Dashboard extends Controller
{
    public mixed $database;
    public mixed $usuario;
    public mixed $endorsamento;

    public function __construct()
    {
        $this->database = new Database();
        $this->usuario = new Usuario();
        $this->endorsamento = new Endorsamento();
    }
    
    public function index(): void
    {

    }

    public function empresa(): void
    {
        $this->view('empresa_dashboard');
    }

    public function escola(): void
    {
        $erros = [];
        $estudantes = $this->database->query('SELECT a.nome, a.email, a.endereco, b.* 
                                            FROM usuarios as a 
                                            INNER JOIN estudantes as b on a.id_usuario = b.id_usuario');

        if(count($_POST) > 0) {
            
            if($this->endorsamento->validar($_POST)) {
                $this->endorsamento->insert($_POST);
            }else {
                $erros = $this->endorsamento->errors;
                dd($erros);
            }
        }

        $this->view('escola_dashboard', [
            'estudantes' => $estudantes
        ]);
    }

    public function estudante(): void
    {
        $this->view('estudante_dashboard');
    }
}