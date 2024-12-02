<?php

namespace App\Controllers;
use App\Core\Controller;

class Emprego extends Controller
{
    public function index() 
    {
        $this->view('emprego');
    }
}