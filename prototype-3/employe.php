<?php
    class Employe {
        private $firstName;
        private $lastName;
        private $age;

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

  

        public function getAge(){
            return $this->age;
        }

        public function setAge($value){
            $this->age = $value;
        }
    }
?>