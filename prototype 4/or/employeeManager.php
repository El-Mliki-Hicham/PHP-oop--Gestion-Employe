<?php


class GestionEmploye{

    public function GetEmploye(){

        $fichier = file_get_contents('employees,json');
        $Data = json_decode($fichier);
        $tableuEmployes=array();
        foreach($Data as $value){
          $employe = new Employee();
            $employe->setFirstName($value->Prenom);
            $employe->setLastName($value->Nom);
            $employe->setAge($value->Age);
            array_push($tableuEmployes , $employe);

        }
        return $tableuEmployes ;
    }

public function insertEmploye($employe){
    $employe->setId(uniqid());

    $fichier = file_get_contents('employees,json');
        $Data = json_decode($fichier);
        $tableuEmployes= array(
            'id'=> $employe->getId(),
            'Prenom'=>$employe->getFirstName(),
            'Nom'=>$employe->getLastName(),
            'Age'=>$employe->getAge(),
         );
        array_push($tableuEmployes , $employe);
        file_put_contents('employees.json', json_encode($Data));

}

public function editEmploye($id,$Prenom, $Nom, $Age){
    $fichier = file_get_contents('employees.json');
    $data = json_decode($fichier);
    $tableuEmployes = array(
                            'id'=> $id,
                            'Prenom' => $Prenom,
                            'Nom' => $Nom,
                            'Age' => $Age,
                            );


   for($i = 0; $i < count($data); $i++){
    if($data[$i]->id== $id){
        $data[$i] = $tableuEmployes;
        break;
    }
   }
    file_put_contents('employees.json', json_encode($data));

}

public function EditRowEmploye($id){
    $file = file_get_contents("employees.json");
    $data = json_decode($file);
    $employee = new Employee();

    foreach($data as $value){
        if($value->id== $id){
            $employee->setId($value->id);
            $employee->setFirstName($value->Prenom);
            $employee->setLastName($value->Nom);
            $employee->setAge($value->Age);
            break;
        }
    }
    return $employee;
}


}








?>