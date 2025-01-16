<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\Database;

class Empresa extends Controller
{
    public mixed $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function index(): void
    {
        $dados_empresa = $this->database->query('SELECT a.nome, a.email, a.endereco, b.NIF, b.sector
                                                FROM usuarios as a 
                                                INNER join empresas  as b ON a.id_usuario = b.id_usuario');
        $this->view('empresas', [
            'empresas' => $dados_empresa
        ]);
    }
}