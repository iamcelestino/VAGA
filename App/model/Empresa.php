<?php

namespace App\Model;
use App\Core\Model;

class Empresa extends Model
{
    protected array $allowed_columns = [
        'id_empresa',
        'NIF',
        'id_usuario',
        'sector'
    ];

    protected array $before_insert = [
        'busca_id_usuario'
    ];

    public function validar(array $dados_empresa): bool 
    {
        $dados_empresa['NIF'] = (int)$dados_empresa['NIF'];
        if(empty($dados_empresa['NIF']) || !is_int($dados_empresa['NIF'])) {
            $this->errors['NIF'] = "NIF INVALIDO";
        }

        $sector = ['finanças', 'Educação', 'Saúde', 'Tecnologia', 'outro'];
        if(empty($dados_empresa['sector']) || !in_array($dados_empresa['sector'], $sector)) {
            $this->errors['sector'] = "SETOR INVALID";
        }

        if(count($this->errors) == 0) {
            return true;
        }

        return false;
    }


public function busca_id_usuario(array $dados): array
{   

    $usuario = new Usuario();

    $query = "SELECT id_usuario FROM usuarios WHERE tipo_usuario = :tipo ORDER BY id_usuario DESC LIMIT 1";
    $result = $usuario->query($query, ['tipo' => 'empresa'], "array");

    if ($result && isset($result[0]['id_usuario'])) {
        $dados['id_usuario'] = $result[0]['id_usuario'];
    } else {
        throw new \Exception("No 'empresa' user found in the database.");
    }

    return $dados; 
}


}