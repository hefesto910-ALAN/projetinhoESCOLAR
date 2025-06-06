<?php
class Connection {
    private $db;

    public function __construct() {
        $host = "sql112.infinityfree.com";
        $user = "your_username"; // Substitua pelo seu usuário real
        $password = "your_password"; // Substitua pela sua senha real
        $database = "your_database"; // Substitua pelo nome do banco de dados real
        $port = 3306;

        try {
            $dsn = "mysql:host=$host;dbname=$database;port=$port";
            $this->db = new PDO($dsn, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->db;
    }
}
