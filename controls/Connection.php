<?php

class Database{
private $host = "localhost"; 
private $user = "root";
private $pwd = "";
private $dbName ="ics3104";

public function connect(){
    try
    {
        $dsn = 'mysql:host='.$this->host .';dbname='.$this->dbName ;
        $pdo = new PDO($dsn,$this->user,$this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        
        return $pdo;
    }
    catch(PDOException $ex)
    {
        die("Error:".$ex);
    }
    
}
public function databaseClose(){
 //mysqli_close($this->connect()->pdo);
 $this->pdo = null;
}

}
?>