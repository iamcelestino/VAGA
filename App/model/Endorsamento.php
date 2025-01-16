<?php 

namespace App\Model;
use App\Core\Model;

class Endorsamento extends Model
{
    public array $errors = [];

    protected array $allowed_columns = [
        'id_escola',
        'id_estudante'
    ];

    protected array $before_insert = [];
    

    public function validar(array $dados_endorsamento): bool
    {
        if(empty($dados_endorsamento['id_escola']))
        {
            $this->errors['id_escola'] =  'id_escola inexistente';
        }

        if(empty($dados_endorsamento['id_estudante']))
        {
            $this->errors['id_estudante'] =  'id_usuario inexistente';
        }

        if(count($this->errors) == 0 ) {
            return true;
        }

        return false;
    }
}