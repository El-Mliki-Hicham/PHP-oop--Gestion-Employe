

<?php

if(!empty($_POST)){

    $firstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Age = $_POST["Age"];
$person=array($LastName,$Age,$FirstName);

    $fichier = file_get_contents("person.json");
    $data=json_decode($data,true);
    array_push($data,$person);
}



?>

<h1>insert your information</h1>
<form action=""method='post'></form>
<label for="First Name">First Name</label>
<input type="text"name="FirstName" >
<br>
<label for="First Name">Last Name</label>
<input type="text"name="LastName" >
<br>
<label for="First Name">Age</label>
<input type="text"name="Age" >
<br>
<button type="submit">ajoute</button>