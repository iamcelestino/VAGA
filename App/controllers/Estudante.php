<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\Database;

class Estudante extends Controller 
{
    public mixed $database;

    public function __construct()
    {
        $this->database = new Database();
    }
  
    public function index(): void
    {
        $dados_estudante = $this->database->query('SELECT a.*, b.data_nascimento, b.curso
                                                    FROM usuarios as a 
                                                    INNER Join estudantes as b on a.id_usuario = b.id_usuario');
    
        $this->view('Estudante', [
            'estudantes' => $dados_estudante
        ]);
    }

    public function detalhes(int $id = null): void
    {
        $dados_estudante = $this->database->query('SELECT a.*, b.data_nascimento, b.curso
                                                    FROM usuarios as a 
                                                    INNER JOIN estudantes as b on a.id_usuario = b.id_usuario
                                                    WHERE a.id_usuario = :id', ['id' => $id]);

        $this->view('detalhe_estudante', [
            'estudante' => $dados_estudante
        ]);
    }

}
