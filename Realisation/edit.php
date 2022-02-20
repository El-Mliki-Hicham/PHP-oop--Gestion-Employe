

<?php
    include 'configuration.php';
    include 'employe.php';
    include 'employeManager.php';
// Pour afficher Row 
    $employeManager=new EmployeManager();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $afficherValue = $employeManager->SelectRowEdit($connectData,$id);

    }

// Pour modifier Row

    if (!empty($_POST)){
        
        $employe =new Employe();

        $employe->setFirstName($_POST['prenom']);
        $employe->setLastName($_POST['nom']);
        $employe->setDate_de_naissance	($_POST['date_de_naissance']);
        $employe->setDepartement($_POST['departement']);
        $employe->setSalaire($_POST['salaire']);
        $employeManager->EditEmloye($connectData,$employe,$id);
        header('Location: index.php');
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
                <input  class="form-control item" id="username" value=<?php echo $afficherValue['Prenom']?> name="prenom" placeholder="Prenom">
            </div>
            
            <div class="form-group">
                <input  class="form-control item" id="" value=<?php echo $afficherValue['Nom']?> name="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" id="phone-number"value=<?php echo $afficherValue['Date_de_naissance']?> name="date_de_naissance" placeholder="Date_de_naissance">
            </div>
            <div class="form-group">
                <input  class="form-control item" id="" name="departement" value=<?php echo $afficherValue['Departement']?> placeholder="Departement">
            </div>
            <div class="form-group">
                <input type="number" class="form-control item"  id="" name="salaire" value=<?php echo $afficherValue['Salaire']?> placeholder="Salaire">
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

