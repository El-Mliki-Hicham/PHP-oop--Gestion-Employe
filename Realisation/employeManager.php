<?php 

class EmployeManager {


    // getEmployes =  pour affichage dans index.php
    public function getEmployes($connectData){
        $getData = 'SELECT id,Prenom,Nom,Date_de_naissance,Departement,Salaire	 FROM personnes';
        $resulta = mysqli_query($connectData,$getData);
        $data = mysqli_fetch_all($resulta,MYSQLI_ASSOC);
        return $data ; 
    }

    // insertEmploye = pour ajoute les information dans fichier insert.php 
    public function insertEmploye($connectData,$employe){
        $Prenom = $employe->getFirstName();
        $Nom = $employe->getLastName();
        $Date_de_naissance	 = $employe->getDate_de_naissance();
        $Departement =$employe->getDepartement();
        $Salaire =$employe->getSalaire();
        $insertData = "INSERT INTO personnes(Prenom,Nom,Date_de_naissance,Departement,Salaire)
        VALUE ('$Prenom','$Nom','$Date_de_naissance','$Departement','$Salaire')";
        
        mysqli_query($connectData,$insertData);
    }

    
    // SelectRowEdit = pour selection row et afficher dans input 
    public function SelectRowEdit($connectData,$id){
        $getRow = "SELECT * FROM personnes WHERE id=$id";
        $resulta= mysqli_query($connectData, $getRow);
       // musqli_fetch_assoc = change data  en array 
        $data = mysqli_fetch_assoc($resulta);
        return $data;
    } 


    // EditEmploye = modification row
    public function EditEmloye($connectData,$employe,$id){
        $Prenom = $employe->getFirstName();
        $Nom = $employe->getLastName();
        $Date_de_naissance = $employe->getDate_de_naissance();
        $Departement =$employe->getDepartement();
        $Salaire =$employe->getSalaire();
        $EditData = "UPDATE personnes 
                    SET Prenom='$Prenom',Nom='$Nom',Date_de_naissance='$Date_de_naissance',Departement='$Departement',Salaire='$Salaire'	
                    WHERE id=$id";

        mysqli_query($connectData,$EditData);

    }    

    
    // DeleteEmloye = pour supprime row 
    public function DeleteEmploye($connectData,$id){
        $DeletRow = "DELETE FROM personnes where id=$id";
        mysqli_query($connectData,$DeletRow);
    }













}















?>