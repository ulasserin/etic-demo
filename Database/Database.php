<?php

namespace Database;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {

        $host = 'localhost';
        $dbname = 'eticaret';
        $username = 'root';
        $password = '';

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Database connection error: ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
