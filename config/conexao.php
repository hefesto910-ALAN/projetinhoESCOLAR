<?php

class Conection{
  private $db;

  public function __construct() {
    $host = 'sql101.infinityfree.com';
    $user = 'if0_39060022'; 
    $password = 'F6jXCjEEoU';
    $database = 'if0_39060022_XXX'; // Replace with your database name
    $port = 3306; // Default MySQL port

    try{
        $this->db = new PDO("mysql:host=$host;dbname=$database;port=$port", $user, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "erro 2378";
    }



} 
    public function getConnection() {
        return $this->db;
    }

}
?>   