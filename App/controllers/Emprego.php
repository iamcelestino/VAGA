<?php

namespace App\Controllers;
use App\Core\Controller;

class Emprego extends Controller
{
    public function index() 
    {
        $this->view('emprego');
    }

    public function post_job($id = null)
    {
        $this->view('postar_trabalho');
        echo $id;
    }
}