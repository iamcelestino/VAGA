<?php

namespace App\Core;

class Controller {
    
    public function view($view, array $data = []) 
    {
        extract($data);

        if(file_exists('../App/views/' . $view . '.php')) {

            require_once ('../App/views/' . $view . '.php');

        } else {

            require_once ('../App/views/404.php');

        }
    }

    public function load_model($model) 
    {
        $model_path = "App\\Model\\" . $model;

        if(class_exists($model_path)) {

            return new $model_path();

        } else {

            throw new \Exception("Model class $model_path not found");
        
        }
}

    public function redirect( $link)
    {
        header("Location: ". BASE_URL .trim($link, "/"));
        die;
    }

}