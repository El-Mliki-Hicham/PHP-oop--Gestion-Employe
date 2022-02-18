<?php
    include 'config.php';
    include 'employee.php';
    include 'employeeManager.php';
// Pour afficher Row 
    $employeManager=new EmployeManager();

    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $employe = $employeManager->SelectRowEdit($connectData,$id);

    }

// Pour modifier Row

    if (isset($_POST)){
        
        $employe =new Employe();

        $employee->setFirstName($_POST['prenom']);
        $employee->setLastName($_POST['nom']);
        $employee->setAge($_POST['age']);
        $employeManager->EditEmloye($connectData,$employe,$id);
        header('Location: index.php');
    }
?>


<body>


<form action="" method="POST">
Prenom : 	<input type="text" value=<?php echo $employee['Prenom']?> name="prenom" >
Nom: 		<input type="text" value=<?php echo $employee['Nom']?>  name="nom" >
Age : 		<input type="text" value=<?php echo $employee['Age']?>  name="age" >
   
<button type="submit">modifier</button>

</form>