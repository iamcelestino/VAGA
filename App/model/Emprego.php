<?php

namespace App\Model;
use App\Core\Model;
use DateTime;

class Emprego extends Model
{
    protected array $allowed_columns = [
        'id_emprego',
        'titulo',
        'descricao',
        'qualificacao',
        'data_limite',
        'id_empresa',
        'status',
        'tipo_emprego'
    ];

    protected array $before_insert = [
    
    ];

    protected array $after_select = [
        'busca_usuario',
        'busca_empresa'
    ];

    public function validar(array $dados_emprego): bool
    {   
        $this->errors = [];

        if(empty($dados_emprego['titulo'])) {
            $this->errors['titulo'] = 'Titulo nao pode estar vazio, por favor insira';
        }

        if(empty($dados_emprego['descricao'])) {
            $this->errors['descricao'] = 'Descricao  nao pode estar vazio, por favor insira';
        }

        if(empty($dados_emprego['qualificacao'])) {
            $this->errors['qualificacao'] = 'Descricao  nao pode estar vazio, por favor insira';
        }
        
        $data_limite = DateTime::createFromFormat('Y-m-d', $dados_emprego['data_limite']);
        if(!$data_limite) {
            $this->errors['data_limite'] = "Data limite esta vazio ou formaato invalido";
        }

        $status = ["ativo", "inativo", "preenchido"];
        if(empty($dados_emprego['status']) || !in_array($dados_emprego['status'], $status)) {

            $this->errors['status'] = "Status inestente";
        }

        $tipo_emprego = ["tempo integral", "meio período", "freelancer", "temporário"];
        if(empty($dados_emprego['tipo_emprego']) || !in_array($dados_emprego['tipo_emprego'], $tipo_emprego)) 
        {
            $this->errors['tipo_emprego'] = "Tipo de emprego inexistente";
        }

        if(count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function busca_usuario(array $dados): mixed
    {
        $usuario = new Usuario();
        foreach($dados as $chave => $coluna) {
            $resultado = $usuario->where('id_usuario', $coluna->id_empresa);
            $dados[$chave]->usuario = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function busca_empresa(array $dados): mixed 
    {
        $empresa = new Empresa();

        foreach($dados as $chave => $coluna) {
            $resultado = $empresa->where('id_usuario', $coluna->id_empresa);
            $dados[$chave]->usuario = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

}