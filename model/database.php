<?php
class Database{
    // une methode static est une methode qu'on peut executer sans instancer la classe dans laquelle elle est implementee
    // Database::dbConnect();
    public static function dbConnect(){
        $conn = null;
        $host = "localhost";
        $dbname = "readygo";
        $root = "root";
        $password = "";
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $root, $password);
        }catch(PDOException $e){
            $e->getMessage();
        }
        return $conn;
    }
}