<?php
    include 'configuration.php';
    include 'employe.php';
    include 'employeManager.php';
// Pour afficher Row 
    $employeManager=new EmployeManager();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $employe = $employeManager->SelectRowEdit($connectData,$id);

    }

// Pour modifier Row

    if (!empty($_POST)){
        
        $employe =new Employe();

        $employe->setFirstName($_POST['prenom']);
        $employe->setLastName($_POST['nom']);
        $employe->setAge($_POST['age']);
        $employeManager->EditEmloye($connectData,$employe,$id);
        header('Location: index.php');
    }
?>


<body>


<form action="" method="POST">
Prenom : 	<input type="text" value=<?php echo $employe['Prenom']?> name="prenom" >
Nom: 		<input type="text" value=<?php echo $employe['Nom']?>  name="nom" >
Age : 		<input type="text" value=<?php echo $employe['Age']?>  name="age" >
   
<button type="submit">modifier</button>

</form>