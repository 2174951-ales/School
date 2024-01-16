<?php

class Database
{
    public $pdo;

    public function __construct($db = "pdo oop", $user = "root", $pass = "", $host = "localhost:3307")
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
            // set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to $db" . "<br />\n";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function InsertUser($email, $password)
    {
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
        $stmt = $this->pdo->prepare($sql);

        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute([$email, $password]);
    }
}
