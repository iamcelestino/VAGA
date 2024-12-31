<?php

namespace App\Controllers;
use App\Core\{Controller, Database };
use App\Model\{Usuario, Empresa, Escola, Estudante};

class Cadastro extends Controller
{
    public mixed $usuario;
    public mixed $empresa;
    public mixed $escola;
    public mixed $estudante;
    public mixed $database;
    public array $errors = [];

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->empresa = new Empresa();
        $this->escola = new Escola();
        $this->estudante = new Estudante();
        $this->database = new Database();
    }

    public function index()
    {   

        if (count($_POST) > 0) {

            if($this->usuario->validar($_POST)) {
                $this->usuario->insert($_POST);
            }

            $tipo_usuario = $_POST['tipo_usuario'] ?? null;

            switch($tipo_usuario) {

                case 'empresa':
                   $this->cadastra_empresa($_POST);
                break;

                case 'estudante':
                    $this->cadastra_estudante($_POST);
                break;

                case 'escola':
                    $this->cadastra_escola($_POST);
                break;
                
                default:
                $this->errors[] = 'tipo de usuario invalido';
            }

        }

        $query = "SELECT a.nome, b.id_escola FROM usuarios as a inner JOIN escolas as b on a.id_usuario = b.id_usuario";
        $escolas = $this->database->query($query);

        $this->view('cadastro', [
            'errors' => $this->errors,
            'escolas' => $escolas
        ]);
    }

    public function cadastra_empresa(array $dados): void 
    {
        echo "empresa  was inserted";
        $dados_empresa = [
            'NIF' => $dados['NIF'] ?? null,
            'sector' => $dados['sector'] ?? null,
        ];
        if ($this->empresa->validar($dados_empresa)) {
            $this->empresa->insert($dados_empresa);
            $this->redirect('login');

        } else {
            $this->errors = $this->empresa->errors;
            dd($this->errors); 
        }
    }

    public function cadastra_estudante(array $dados): void
    {
        $dados_estudante = [
            'data_nascimento' => $dados['data_nascimento'] ?? null,
            'id_escola' => $dados['id_escola'] ?? null,
            'curso' => $dados['curso'] ?? null,
        ];
        $this->estudante->insert($dados_estudante);
    } 
    
    public function cadastra_escola(array $dados): void
    {
        $dados =  $this->escola->busca_id_usuario($dados) ?? null;
        $id_usuario = $dados['id_usuario'];

        $dados_escola = [
            'id_usuario' => $id_usuario
        ];

        $this->escola->insert($dados_escola);
    }
}