<?php

    include 'configeration.php';
    if(!empty($_POST)){
        $Prenom = $_POST['Prenom'];
        $Nom = $_POST['Nom'];
        $Age = $_POST['Age'];
        $person = array($Prenom, $Nom,$Age);

        // sql insert query
        $Insert= "INSERT INTO personnes(Prenom,Nom,Age) 
                                VALUES('$Prenom', '$Nom', '$Age')";
        
        mysqli_query($connect, $Insert);
     
        header("Location: index.php");

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        
		<h3>Create a User</h3>
		<form action="" method='post'>
	
	<input type="text" name="Prenom">
	<input type="text" name="Nom">
	<input type="text" name="Age">
	
	<button type='submit'>ajoute</button>
	</form>
	
</body>
</html>