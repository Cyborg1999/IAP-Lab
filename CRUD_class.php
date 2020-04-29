<?php
    require_once('Connection.php');
    require_once('CRUD.php');

    class Crud extends Database implements Crud{


        private $firstname;
        private $lastname;
        private $city;


        public function save()
        {
            $sql = "INSERT INTO user(firstname,lastname,city)VALUES(firstname,lastname,city)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([
                'firstname'=>$this->firstname,
                'lastname'=>$this->lastname,
                'city'=>$this->city
            ]);             
        }
    
        public function readAll(){
            $sql = "SELECT * FROM users";
            $stmt = $this->connect()->query($sql);
            while($id = $stmt->fetch()){
               // echo $id[id]. '<br>';
            }
        }
    
        public function update()
        {
            $sql = "";
        }
        public function readUnique()
        {
            
        }

        public function search()
        {
            
        }

        public function removeOne()
        {
            
        }
        public function removeAll(){
            
        }

    }

?>