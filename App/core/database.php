<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    
    private PDO $pdo;
    private string $dsn = "mysql:host=" . HOST . ";dbname=" . DB_NAME . ";charset=utf8";

    public function connection()
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
}