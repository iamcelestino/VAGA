<?php

namespace App\Model;
use App\Core\Model;

class Estudante extends Model
{
    protected array $allowed_columns = [
        "id_usuario",
        "id_escola",
        'data_nascimento',
        'curso'
    ];

    protected array $before_insert = [
        'busca_id_usuario'
    ];

    protected array $after_select = [
        'busca_usuario'
    ];

    
    public function validar(array $dados_estudante): bool
    {
        if(empty($dados_estudante['id_usuario']) || !is_int($dados_estudante['id_usuario'])) {
            $this->errors['id_usuario'] = "id usuario esta vazio";
        }

        if(empty($dados_estudante['id_escola']) || !is_int($dados_estudante['id_escola'])) {
            $this->errors['id_escola'] = "id usuario esta vazio";
        }

        if(empty($dados_estudante['data_nascimento'])) {
            $this->errors['data_nascimento'] = "data invalida";
        }

        if(empty($dados_estudante['curso'])) {
            $this->errors['curso'] = "data invalida";
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
        $resultado = $usuario->query($query, ['tipo' => 'estudante'], "array");

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