<?php
    include 'employeeManager.php';

    $employeeManager = new GestionEmploye();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $afficherValue = $employeeManager->getEmploye($id);

    }

    if(!empty($_POST)){
		$id = $_POST['id'];
		$Prenom = $_POST['Prenom'];
		$Nom = $_POST['Nom'];
		$Age = $_POST['Age'];
  

        $employeeManager->editEmploye($id, $Prenom, $Nom,$Age);

        header('Location: index.php');
        
    }
?>




<form action="" method="POST">
Prenom : 	<input type="text" value=<?php echo $afficherValue->getFirstName()?> name="Prenom" >
Nom: 		<input type="text" value=<?php echo $afficherValue->getLastName() ?>  name="Nom" >
Age : 		<input type="Number" value=<?php echo $afficherValue->getAge()?>  name="Age" >
   
<button type="submit">modifier</button>

</form>