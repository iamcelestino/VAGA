<?php 
declare(strict_types=1);

namespace App\Model;

class Auth
{
    public static function authenticate(mixed $dados_usuario): void
    {
        $_SESSION['USUARIO'] = $dados_usuario;
    }

    public static function is_logged_out(): void
    {
        if(isset($_SESSION['USUARIO'])) {
            unset($_SESSION['USUARIO']);
        }
    }

    public static function is_logged(): bool
    {
        if(isset($_SESSION['USUARIO'])) {
            return true;
        }
        return false;
    }
}

