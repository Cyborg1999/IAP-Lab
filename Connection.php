<?php

class Database{
private $host = "localhost"; 
private $user = "root";
private $pwd = " ";
private $dbName ="ics3104";

protected function connect(){
    $dsn = 'mysql:host='.$this->host .';dbname='.$this->dbName ;
    $pdo = new PDO($dsn,$this->user,$this->pwd);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $pdo;
}
protected function databaseClose(){
 //mysqli_close($this->connect()->pdo);
 $this->pdo= null;
}

}
?>