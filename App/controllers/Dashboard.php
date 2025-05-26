<?php

namespace App\Controllers;
use App\Core\{Controller, Database};
use App\Model\{Auth, Usuario, Endorsamento, Candidatura};

class Dashboard extends Controller
{
    public mixed $database;
    public mixed $usuario;
    public mixed $endorsamento;
    public mixed $candidatura;

    public function __construct()
    {
        $this->database = new Database();
        $this->usuario = new Usuario();
        $this->endorsamento = new Endorsamento();
        $this->candidatura = new Candidatura();
    }
    
    public function index(): void
    {
        $tipo_usuario = $_SESSION['USUARIO']->tipo_usuario;
        $id_usuario = $_SESSION['USUARIO']->id_usuario;

        if($tipo_usuario == 'empresa') {
            $this->empresa($id_usuario);
        }elseif($tipo_usuario == 'escola') {
            $this->escola();
        }else {
            $this->estudante($id_usuario);
        }
    }

    public function empresa(int $id_empresa): void
    {  
        $candidatura_por_empresa = $this->candidatura->candidaturas_por_empresa($id_empresa);

        $this->view('empresa_dashboard', [
            'candidaturas' =>  $candidatura_por_empresa
        ]);
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

    public function estudante(int $id_usuario): void
    {    
        $candidatura_estudante = $this->candidatura->busca_candidatura($id_usuario);
        $this->view('estudante_dashboard', [
            'candidaturas' => $candidatura_estudante ?? null
        ]);
    }
}