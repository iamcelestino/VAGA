<?php

declare(strict_types=1);

namespace App\Core;
use App\Core\Database;

class Model extends Database
{
    protected mixed $table;
    public array $errors = [];

    public function __construct()
    {
        if(property_exists($this, 'table')) {

            $this->table = strtolower((new \ReflectionClass($this))->getShortName()) . "s";

        } 
    }

    public function where($column, $value, string $order = "ASC"): array|object
    {   
        $column = addslashes($column);
        $query = "SELECT * FROM " . $this->table . " WHERE " . $column . " = : value" . "ORDER BY" . $order;
        $data = $this->query($query, [
           'value' => $value 
        ]);
        return $data;
    }

    public function first(string $column, mixed $value): array|object 
    {
       $column = addslashes($column);
       $query = "SELECT * FROM " . $this->table . "WHERE " . $column . "= :value";
       $data = $this->query($query, [
            'value' => $value
       ]); 

       if(is_array($data)) {

            if(property_exists($this, 'after_select')) {
                foreach($this->after_select as $function) {
                    $data = $this->$function($data);
                }
            }
       }

       if(is_array($data)) {
            $data = $data[0];
       }

       return $data;
    }

    public function findAll(string $order = 'ASC'): array|object 
    {
        $query = " SELECT * FROM ". $this->table . " ORDER BY " . $order;
        $data = $this->query($query);

        if(is_array($data)) {
            
            if(property_exists($this, 'after_select')) {

                foreach($this->after_select as $function) {
                    $data = $this->$function($data);
                }
            }
        }

        return $data;
    }

    public function insert(array $data): array|object 
    {
        if(property_exists($this , 'allowed_columns')) {

            foreach($data as $key => $columns) {

                if(!in_array($key, $this->allowed_columns)) {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'before_insert')) {

            foreach($tis->before_insert as $function) {
                $data = $this->$function($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table($columns) VALUES(:$values)";

        return $this->query($data, $data);

    }

    public function update(mixed $id, array $data): mixed 
    {
        if(property_exists($this, 'allowed_columns')) {
            
            foreach($data as $key => $columns) {

                if(!in_array($key, $this->allowed_columns)) {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'before_insert')) {
            
            foreach($this->before_insert as $funtion) {

                $data = $this->$funtion($data);
            }
        }

        $string = '';
        foreach($data as $key => $value) {
            $string .= "$key = : $key, ";
        }

        $strg = rtrim($string, ", ");
        $data['id'] = $id;

        $query = "UPDATE $this->table SET $strg WHERE id = :id";
        return $this->query($query, $data);
    }

    public function delete(mixed $id) 
    {
        $query = "SELECT FROM $this->table WHERE id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }
}
