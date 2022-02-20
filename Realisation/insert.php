<?php

    include 'configuration.php';
	include 'employe.php';
	include 'employeManager.php';

   if(!empty($_POST)){
	   $employe = new Employe();
	   $employeManager=new EmployeManager();

	   $employe->setFirstName($_POST['prenom']);
	   $employe->setLastName($_POST['nom']);
	   $employe->setAge($_POST['age']);

	   $employeManager->insertEmploye($connectData,$employe);
	   header("Location: index.php");
   }

?>







<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css.input/style.css">
</head>
<body>
    <div class="registration-form">
        <form method="POST">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input  class="form-control item" id="username" name="prenom" placeholder="Prenom">
            </div>
            
            <div class="form-group">
                <input  class="form-control item" id="email" name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <input  class="form-control item" id="phone-number" name="age" placeholder="Age">
            </div>
           
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">ajoute</button>
            </div>
        </form>
        <div class="social-media">
            
          
          
        </div>
    </div>
  
</body>
</html>
