<?php

declare(strict_types=1);

namespace App\Core;

use PDO;
use PDOException;

class Database {

    protected array $allowed_columns = [];
    protected array $before_insert = [];
    protected array $after_select = [];
    
    private PDO $pdo;
    private string $dsn = "mysql:host=" . HOST . ";dbname=" . DB_NAME . ";charset=utf8";

    public function connection():PDO
    {
        try {
            $this->pdo = new PDO($this->dsn, USER, PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch(PDOException $e) {
            echo "CONNECTION FAILED" . $e->getMessage();
        }

        return $this->pdo;
    }

    public function query(string $query, array $data = [], string $data_type = "object") 
    {
        
        $connection = $this->connection();
        $statement = $connection->prepare($query);

        if($statement) {

            $check_execution = $statement->execute($data);

            if($check_execution) {

                if($data_type  == "object") {

                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                }else {

                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }

        return false;
    }
}