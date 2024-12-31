<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Auth;
use App\Model\{Emprego as modeloEmprego, Candidatura};


class Emprego extends Controller
{   
    protected mixed $emprego;
    protected mixed $candidatura;

    public function __construct()
    {
        $this->emprego = new modeloEmprego();
        $this->candidatura = new Candidatura();
    }

    public function index() 
    {
        $dados = $this->load_model('Emprego');
        $emprego = $dados->findAll();


        //CANDIDATAR-SE PARA UMA VAGA DE EMPREGO
        if(count($_POST) > 0) {

            $_POST['id_estudante'] = Auth::getId_usuario();

            if($this->candidatura->validar($_POST)) {
                $this->candidatura->insert($_POST);
                $this->redirect('home');
            }
            else {
                echo "NAO CONSEGUIU APLICAR-SE PARA VAGA";
            }
        }
        
        $this->view('emprego', [
            'empregos' => $emprego
        ]);
    }

    public function post_job()
    {   
        $erros = [];
       if(count($_POST) > 0) {

            if($this->emprego->validar($_POST)) {

                $_POST['id_empresa'] = Auth::getId_usuario();
                
                $this->emprego->insert($_POST);
                $this->redirect('emprego');
            }
            else {
               $erros = $this->emprego->errors;
            }
       }

       $this->view('postar_trabalho',
            ['empregos' => $_POST]
        );
        
    }

}