

<?php

if(!empty($_POST)){

    $firstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Age = $_POST["Age"];
$person= array($LastName,$Age,$firstName);

    $fichier = file_get_contents("person.json");
    $data=json_decode($fichier,true);
    array_push($data,$person);
    file_put_contents("person.json",json_encode($data));
    header("Location: indx.php");
}



?>

<h1>insert your information</h1>
<form method='POST'>
    
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
<a href="indx.php">Back</a>
</form>