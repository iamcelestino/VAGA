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
}