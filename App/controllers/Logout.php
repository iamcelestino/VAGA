<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\Auth;

class Logout extends Controller
{
    public function index()
    {
        Auth::is_logged_out();
        $this->redirect('login');
    }
}

