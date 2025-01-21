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

    protected array $after_select = [
        'busca_usuario',
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
        $resultado = $usuario->query($query, ['tipo' => 'empresa'], "array");

        if ($resultado && isset($resultado[0]['id_usuario'])) {
            $dados['id_usuario'] = $resultado[0]['id_usuario'];
        } else {
            throw new \Exception("id_usuario nao encontrado");
        }
        return $dados; 
    }

    public function busca_usuario(array $dados): mixed
    {
        $usuario = new Usuario();
        foreach($dados as $chave => $coluna) {
            $resultado = $usuario->where('id_usuario', $coluna->id_usuario);
            $dados[$chave]->usuario = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }
}