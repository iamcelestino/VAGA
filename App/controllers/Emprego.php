<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Auth;
use App\Model\Emprego as modeloEmprego;

class Emprego extends Controller
{   
    protected mixed $emprego;

    public function __construct()
    {
        $this->emprego = new modeloEmprego();
    }

    public function index() 
    {
        $this->view('emprego');
    }

    public function post_job()
    {   
        $erros = [];
       if(count($_POST) > 0) {

            if($this->emprego->validar($_POST)) {

                $_POST['id_empresa'] = $_SESSION['USUARIO']->id_usuario;
     
                $this->emprego->insert($_POST);
                $this->redirect('emprego');
            }
            else {
               $erros = $this->emprego->errors;
            }
       }

       dd($erros);
       $this->view('postar_trabalho',
            ['empregos' => $_POST]
        );
        
    }
}