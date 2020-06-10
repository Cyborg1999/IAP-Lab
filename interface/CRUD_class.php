<?php
    require_once('controls/Connection.php');
    require_once('CRUD.php');
    require('authenticator.php');

    class User implements Crud,Authenticator{

        //Values to be inserted
        private $first_name;
        private $lastname;
        private $usercity;
        private $rid;

        //Database Connectors
        private $pdo;
        private $connect;

        private $username;
        private $password;
    
        function __construct($first_name,$lastname,$usercity,$username,$password)
        {
         /*    $this->pdo = new Database;
            $this->connect = $this->pdo->connect();
            return $this->connect; */
        }

        public function getUserData($first_name,$lastname,$usercity){
            $this->first_name = $first_name;
            $this->lastname = $lastname;
            $this->usercity = $usercity;
        }
        /* 
        PHP does not allow multiple constructors, so lets fake one.
        because when we login, we do not have all the details
        we only have username and password and we still need to use this same class.
        we make this method static so that we access it with the class rather than an object 
         */

        /***          
        **    Static constructor
        */
        public static function create(){
            $instance = new self();
            return $instance;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setPassword($password){
            $this->password = $password;
        }



        public function save()#$f,$l,$c
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
            // $sql = "SELECT * FROM users";
            // $read_stmt = $this->connect()->query($sql);
            // $read_stmt->execute(); 
           //return $read_stmt;
           return null;
        }
    
        public function update()
        {
            // $sql = "UPDATE * FROM users(first_name,lastname,city) WHERE id = $this->rid ";
            // $upd_stmt = $this->connect()->prepare($sql);
            // return $upd_stmt;
            return null;
        }

        public function readUnique()
        {
            // $sql = "SELECT * FROM users WHERE ";
            // $read_uniq_stmt = $this->connect()->prepare($sql);
            // return $read_uniq_stmt;
            return null;
        }

        public function search()
        {
            // $sql ="SELECT * FROM users WHERE id = $this->rid AND firstname = ? ";
            // $search_stmt = $this->connect()->prepare($sql);
            // return $search_stmt;
            return null;
        }

        public function removeOne()
        {
            // $sql = "DELETE * FROM users WHERE id =$this->rid AND firstname = ?";
            // $rem_stmt = $this->connect()->prepare($sql);
            // return $rem_stmt;
            return null;
        }
        public function removeAll(){
            // $sql ="DELETE * FROM users";
            // $del_stmt =$this->connect()->prepare($sql);
            // return $del_stmt;   
            return null;         
        }

        public function validateform()
        {
          $fn = $this->first_name;
          $ln = $this->lastname;
          $city = $this->usercity;
          if ($fn==""||$ln ==""||$city=="") {
             return false;
          } 
          return true;

        }
        
        public function createFormErrorSession()
        {
            session_start();
            $_SESSION['form_errors'] = "All fields are required";
        }  
    
    }

?>