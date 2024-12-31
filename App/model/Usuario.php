<?php

declare(strict_types=1);

namespace App\Model;
use App\Core\Model;

class Usuario extends Model
{
    
    protected array $allowed_columns = [
        'id_usuario',
        'nome',
        'email',
        'endereco',
        'tipo_usuario',
        'password',
        'criado_em',
    ];
    
    protected array $before_insert = [
        'hash_password'
    ];

    public function validar(array $data): bool 
    {   
        $this->errors = [];
        
        if(empty($data['nome'])) {
            $this->errors['nome'] = "por favor insira um nome valido";
        }

        if(empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email incorreto";
        }

        if(empty($data['endereco'])) {
            $this->errors['endereco'] = "O Endereco nao pode estar vazio, por favor digite o endereco";
        }

        $tipo_usuario = ['escola', 'empresa', 'estudante'];
        if(empty($data['tipo_usuario']) || !in_array($data['tipo_usuario'], $tipo_usuario)) {
            $this->errors['tipo_usuario'] = 'Por favor selecione o tipo_usuario da empresa';
        }

        if($data['password'] <= 4) {
            $this->errors['password'] = "Password esta vazia ou Menor que 4";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function hash_password(array $data): array
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

}

