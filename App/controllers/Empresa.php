<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\Database;
use App\Model\Emprego;

class Empresa extends Controller
{
    public mixed $database;
    public mixed $emprego;

    public function __construct()
    {
        $this->database = new Database();
        $this->emprego = new Emprego();
    }

    public function index(): void
    {
        $empresa = $this->load_model('Empresa');
        $dados_empresa = $empresa->findAll();

        $this->view('empresas', [
            'empresas' => $dados_empresa
        ]);
    }

    public function empregos(int $id): void
    {
        $empregos = $this->emprego->where('id_empresa', $id);

        $this->view('empresa_emprego', [
            'empregos' => $empregos
        ]);
    }

    public function emprego_activo(int $id_empresa): void
    {
        $empregos = $this->database->query("SELECT * FROM empregos 
                                            WHERE id_empresa = :id_empresa 
                                            AND STATUS = 'ativo'", ['id_empresa' => $id_empresa]);

        $this->view('empresa_emprego', [
            'empregos' => $empregos,
        ]);
    }

}