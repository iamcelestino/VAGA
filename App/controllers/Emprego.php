<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Emprego as modeloEmprego, Candidatura, Auth};

class Emprego extends Controller
{   
    protected mixed $emprego;
    protected mixed $candidatura;

    public function __construct()
    {
        $this->emprego = new modeloEmprego();
        $this->candidatura = new Candidatura();
    }

    public function index(): void
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

    public function sector(mixed $sector): void
    {
        $emprego = $this->load_model('Emprego');
        $empregos = $emprego->findAll();

        $sector = basename(urldecode($_SERVER['REQUEST_URI']));

        $dados_emprego = array_filter($empregos, function($item) use ($sector) {
            return isset($item->usuario->sector) && $item->usuario->sector === $sector;
        });

        $this->view('sector_emprego', [
            'empregos'=> $dados_emprego
        ]);
    }

    public function postar_emprego(): void
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

    public function editar_emprego(int $id = null): void
    {

        $id_emprego = $id;

        $emprego = $this->emprego->where('id_emprego', $id_emprego);

        if(!$emprego) {
            $this->redirect('empregos');
        }

        if(count($_POST) > 0) {

            if($this->emprego->validar($_POST)){
               $this->emprego->update($id_emprego, $_POST);
               $this->redirect('emprego');
            }else {
                $erros = $this->emprego->errors;
            }
        }
        
        $this->view('editar_emprego', [
            'emprego'=> $emprego[0]
        ]);
    }

    public function detalhes($id): void
    {

    }

    public function deletar_emprego(int $id = null): void
    {
        
        $id_emprego = $id;

        $emprego = $this->emprego->where('id_emprego', $id_emprego);

        if(!$emprego) {
            $this->redirect('empregos');
        }

        if(count($_POST) > 0) {

            if($this->emprego->validar($_POST)){
               $this->emprego->delete($id_emprego, $_POST);
               $this->redirect('emprego');
            }else {
                $erros = $this->emprego->errors;
            }
        }

        $this->view('deletar_emprego', [
            'emprego'=> $emprego[0]
        ]);
    }

}