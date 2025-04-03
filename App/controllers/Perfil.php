<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Auth;
use App\Model\Usuario;

class Perfil extends Controller
{
    public mixed $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario;
    }

    public function index(int $id): void
    {   
        $id = Auth::getId_usuario();

        $usuario = $this->load_model('usuario');
        $dados_usuario = $usuario->first('id_usuario', $id);

        dd($dados_usuario);

        $this->view('perfil', [
            'usuario' => $dados_usuario
        ]);
    }

    public function editar(int $id): void 
    {
        $usuario = $this->load_model('usuario');
        $dados_usuario = $usuario->first('id_usuario', $id);

        if(!$dados_usuario) {
            echo "Usuario inexistente";
        }

        if(count($_POST)) {
            
            if($this->usuario->validar($_POST)) {

                if(count($_FILES)) {

                    $imagem = carregar_ficheiro($_FILES);

                    $_POST['imagem'] = $imagem['imagem'] ?? null ;
                }

                $this->usuario->update($id, $_POST);
                $this->redirect('perfil');
            
            }
        }

        $this->view('editar_perfil', [
            'usuario' => $dados_usuario
        ]);
    }

}