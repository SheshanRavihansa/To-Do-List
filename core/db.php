<?php

require 'config.php';

class DB
{
    private $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=$GLOBALS[db_host];port=$GLOBALS[db_port];dbname=$GLOBALS[db_name]";
            // set the PDO error mode to exception
            $options = [
                PDO::ATTR_ERRMODE => true,
                PDO::ERRMODE_EXCEPTION => PDO::ERRMODE_EXCEPTION
            ];

            $conn = new PDO($dsn, $GLOBALS['db_username'], $GLOBALS['db_password'], $options);
            $this->conn = $conn;

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
    }

    public function prepare($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
}
