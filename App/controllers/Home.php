<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Auth;

class home extends Controller 
{
    public function index() 
    {
        if(!Auth::is_logged()) {
            $this->redirect('login');
        }
        $this->view('home');
    }
}