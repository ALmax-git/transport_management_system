<?php
class database
{
    private $host = "127.0.0.1";
    private $db_name = "borno_express";
    private $username = "root";
    private $password = "";
    public $conn;
    public $pdo;
    private $dsn;

    public function PDO_connect(){
      try {
          $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->db_name;charset=utf8mb4", $this->username, $this->password);
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         } catch (PDOException $e) {
             die("Database connection failed: " . $e->getMessage());
         }
         return $this->pdo;
    }
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn =  mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Database connection error: " . $e->getMessage());
        }

        return $this->conn;
    }
}
