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
         public function  getDepartement(){
            return $this->Departement;
         }
         public function  setDepartement($value){
             $this->Departement = $value;
        }

        public function getDate_de_naissance(){
            return $this->Date_de_naissance;
        }

        public function setDate_de_naissance($value){
            $this->Date_de_naissance = $value;
        }
        public function getSalaire(){
            return $this->Salaire;
        }

        public function setSalaire($value){
            $this->Salaire = $value;
        }
    }
?>