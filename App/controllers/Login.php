<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Usuario, Auth};

class Login extends Controller
{

    public function index() 
    {
        $erros = [];

        if(count($_POST) > 0) {

            $usuario = new Usuario();

            if($dados_usuario = $usuario->where('email', $_POST['email'])) {

                $dados_usuario = $dados_usuario[0];

                if(password_verify($_POST['password'], $dados_usuario->password)) {

                    Auth::authenticate($dados_usuario);
                    $this->redirect('/home');
                }
            }

            $erros['email'] = "Palavra passe or email errados!";

        }
        $this->view('login', [
            'erros' => $erros
        ]);
    }
}