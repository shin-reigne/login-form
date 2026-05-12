<?php 

class DatabaseConnection {

    private $username = "root";
    private $password = "";
    private $dbName = "mydb";
    private $host = "localhost";

    function connect() {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully!";
            return $pdo;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            return null;
        }
    }


}