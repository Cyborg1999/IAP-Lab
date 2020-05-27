<?php
    require_once('Connection.php');
    require_once('CRUD.php');

    class User implements Crud{

        //Values to be inserted
        private $first_name;
        private $lastname;
        private $usercity;
        private $rid;

        //Database Connectors
        private $pdo;
        private $connect;
    
        // function __construct()
        // {
        //     $this->pdo = new Database;
        //     $this->connect = $this->pdo->connect();
        //     return $this->connect;
        // }

        public function getUserData($first_name,$lastname,$usercity){
            $this->first_name = $first_name;
            $this->lastname = $lastname;
            $this->usercity = $usercity;
        }

        public function save($f,$l,$c)
        {
            try
            {
                $f= $this->first_name;
                $l= $this->lastname;
                $c= $this->usercity;
                $sql = "INSERT INTO `user`(`first_name`, `last_name`, `city`) VALUES ('$f','$l','$c')";
                $this->pdo = new Database;
                $this->connect = $this->pdo->connect();
                $this->connect->exec($sql);
                echo "User added successfully";
            }
            catch(PDOException $ex)
            {
                echo "Error:".$ex->getMessage();
            }    
        }
    
        public function readAll(){
            $sql = "SELECT * FROM users";
            $read_stmt = $this->connect()->query($sql);
            $read_stmt->execute(); 
           return $read_stmt;
        }
    
        public function update()
        {
            $sql = "UPDATE * FROM users(first_name,lastname,city) WHERE id = $this->rid ";
            $upd_stmt = $this->connect()->prepare($sql);
            return $upd_stmt;
        }

        public function readUnique()
        {
            $sql = "SELECT * FROM users WHERE ";
            $read_uniq_stmt = $this->connect()->prepare($sql);
            return $read_uniq_stmt;
        }

        public function search()
        {
            $sql ="SELECT * FROM users WHERE id = $this->rid AND firstname = ? ";
            $search_stmt = $this->connect()->prepare($sql);
            return $search_stmt;
        }

        public function removeOne()
        {
            $sql = "DELETE * FROM users WHERE id =$this->rid AND firstname = ?";
            $rem_stmt = $this->connect()->prepare($sql);
            return $rem_stmt;
        }
        public function removeAll(){
            $sql ="DELETE * FROM users";
            $del_stmt =$this->connect()->prepare($sql);
            return $del_stmt;            
        }

    }

?>