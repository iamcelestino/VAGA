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

    public function busca_candidatura(int $id_usuario): array
    {
        return $this->query(
            "SELECT 
            u_estudante.nome AS nome_estudante,
            c.data_candidatura,
            c.feedback,
            emp.id_emprego,
            emp.titulo,
            emp.descricao,
            emp.qualificacao,
            emp.data_limite,
            empresa.id_empresa,
            u_empresa.nome AS nome_empresa,
            u_empresa.email AS email_empresa
            FROM candidaturas AS c
            INNER JOIN estudantes AS est ON c.id_estudante = est.id_usuario
            INNER JOIN usuarios AS u_estudante ON est.id_usuario = u_estudante.id_usuario
            INNER JOIN empregos AS emp ON c.id_emprego = emp.id_emprego
            INNER JOIN empresas AS empresa ON emp.id_empresa = empresa.id_usuario
            INNER JOIN usuarios AS u_empresa ON empresa.id_usuario = u_empresa.id_usuario
            WHERE u_estudante.id_usuario = :id_usuario
            ",
            ['id_usuario' => $id_usuario]
        );
    }
}