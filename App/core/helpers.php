<?php

declare(strict_types=1);

function dd(mixed $data): void 
{
    echo "<pre>";
        print_r($data);
    echo "</pre>";
}


function escape(mixed $var) {

    return htmlspecialchars($var);
    
}

function buscar_var(mixed $key, string $default = ''): string  
{

    if(isset($_POST[$key])) {

        return $_POST[$key];

    }
    return $default;
}

function buscar_selecionado(string $key, mixed $value)
{
    
    if(isset($_POST[$key])) {

        if($_POST[$key] === $value) {
            return 'Selected';
        }
        return "";
    }
}
