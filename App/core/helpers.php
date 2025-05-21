<?php

declare(strict_types=1);

use App\Model\Imagem;

function dd(mixed $data): void 
{
    echo "<pre>";
        print_r($data);
    echo "</pre>";
}


function escape(mixed $var) {

    if($var == null) {
        return '';
    }
    return htmlspecialchars($var);
    
}

function buscar_var(mixed $key, string $default = ''): string  
{
    if(isset($_POST[$key])) {

        return $_POST[$key];

    }
    return $default;
}

function buscar_selecionado(string $key, mixed $value)
{
    
    if(isset($_POST[$key])) {

        if($_POST[$key] === $value) {
            return 'Selected';
        }
        return "";
    }
}

function busca_imagem($image) 
{
   
    if(!file_exists($image)) {

        $image = ASSETS_URL.'images/undraw_pic_profile_re_7g2h.svg';
    }
    else {
        $imageModel = new Imagem();
        $image = BASE_URL . 'public/'. $imageModel->perfil_Thumb($image);
    }

    return $image;
}



function carregar_ficheiro(mixed $files): array
{
    $ficheiro_carregado = [];

    foreach ($files as $campo => $file) {

        if($file['error'] != UPLOAD_ERR_OK) {
            switch($file['error']) {
                case UPLOAD_ERR_PARTIAL:
                    $ficheiro_carregado[$campo] = 'Ficheiro carregado partilamente';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $ficheiro_carregado[$campo] = 'Nenhum fucheiro foi carregado';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    $ficheiro_carregado[$campo] = "carregamento parado pela extencao PHP";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $ficheiro_carregado[$campo] = "carregamneto excede o tamanho maximo no html form";
                    break;
                case UPLOAD_ERR_INI_SIZE: 
                    $ficheiro_carregado[$campo] = 'ficheiro excede o tamanho maximo para carregamento em php.init';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    $ficheiro_carregado[$campo] = 'pasta temporaria nao encotrada';
                    break;
                case UPLOAD_ERR_CANT_WRITE: 
                    $ficheiro_carregado[$campo] = 'falhou escrever o ficheiro';
                    break;
                default:
                    $ficheiro_carregado[$campo] = 'erro de carregamento desconhecido';
                    break;
            }
        } 

        if($file['size'] > 1144615) {
            $ficheiro_carregado[$campo] = " ficheiro muito grande";
            continue;
        }

        $finfo = new finfo(FILEINFO_MIME_TYPE);

        $mime_type = $finfo->file($file['tmp_name']);

        $mime_types = ['image/gif', 'image/png', 'image/jpeg', 'application/pdf'];

        if(!in_array($mime_type, $mime_types)) {
            exit('Tipo de ficheiro invalido');
        };

        $pathInfo = pathinfo($file['name']);
        $base = $pathInfo['filename'];
        $base = preg_replace('/[^\w-]/', "_", $base);
        $nome_ficheiro = $base . "." . $pathInfo['extension'];

        $diretorio = "uploads/";
        
        if(!is_dir($diretorio)) {
            mkdir($diretorio, 0755, true);
        }

        $destino = $diretorio . $nome_ficheiro;

        $i = 0;

        while(file_exists($destino)) {
            $nome_ficheiro = $base . "($i)." . $pathInfo['extension'];
            $destino = $diretorio .  $nome_ficheiro;
            $i++;
        }

        if(!move_uploaded_file($file['tmp_name'], $destino)) {
            $ficheiro_carregado[$campo] = "nao pode mover ficheiros carregados";
        }

        $ficheiro_carregado[$campo] = $destino;
    }
    return $ficheiro_carregado;
}
