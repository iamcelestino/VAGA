<?php

declare(strict_types=1);

function dd(mixed $data): void 
{
    echo "<pre>";
        print_r($data);
    echo "</pre>";
}

function get_var(mixed $key, string $defaut = ''): string  
{

    if(isset($_POST[$key])) {

        return $_POST[$key];

    }
    return $defaut;
}

function get_selected(string $key, mixed $value): string {
    
    if(isset($_POST[$key])) {

        if($_POST[$key] === $value) {
            return 'Selected';
        }
        return "";
    }
}
