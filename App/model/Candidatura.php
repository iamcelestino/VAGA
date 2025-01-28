<?php 

namespace App\Model;
use App\Core\Model;

class Candidatura extends Model
{
    protected array $allowed_columns = [
        'id_estudante',
        'id_emprego',
        'data_candidatura',
        'feedback'
    ];

    protected array $before_insert = [];

    protected array $after_select = [
        'busca_estudante',
        'busca_emprego'
    ];

    public function validar(array $dados_candidatura): bool
    {
        if(empty($dados_candidatura['id_estudante'])) {
            $this->errors['id_estudante'] = 'Nao pode candidatar-se sem cadastro';
        }

        if(empty($dados_candidatura['id_emprego'])) {
            $this->errors['id_emprego'] = 'emprego inexistente';
        }

        if(count($this->errors) == 0) {
            return true;
        }

        return false;
    }

    public function busca_estudante(array $dados): array
    {
        $estudante = new Estudante();

        foreach($dados as $chave => $coluna) {
            $resultado = $estudante->where('id_estudante', $coluna->id_estudante);
            $dados[$chave]->id_estudante = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function busca_emprego(array $dados): array
    {
        $emprego = new Emprego();
        
        foreach($dados as $chave => $coluna) {
            $resultao = $emprego->where('id_emprego', $coluna->id_emprego);
            $dados[$chave]->id_emprego = is_array($resultao) ? $resultao[0]: false;
        }
        return $dados;
    }
    
}