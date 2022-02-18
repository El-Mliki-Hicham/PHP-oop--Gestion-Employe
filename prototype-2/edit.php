<?php  
include 'configeration.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $selectRow = "SELECT * FROM personnes WHERE id=$id";
        
        $result = mysqli_query($connect, $selectRow);
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
            
            
            $Prenom = $data[0]['Prenom'];
            $Nom = $data[0]['Nom'];
            $Age = $data[0]['Age'];
             
            
       
    }

    if(!empty($_POST)){
        
        $prenom = $_POST['Prenom'];
        $Nom = $_POST['Nom'];
        $Age = $_POST['Age'];

        $sqlUpdateQuery ="UPDATE personnes SET 
        Prenom='$Prenom',Nom='$Nom',Age='$Age' WHERE id=$id ";

        mysqli_query($connect, $sqlUpdateQuery);
        header('location: index.php');
        
    };
    
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
<form action="" method='post'>
	
	<input type="text" name="Prenom" value=" <?php echo $Prenom?>">
	<input type="text" name="Nom"  value=" <?php echo $Nom?>">
	<input type="text" name="Age"  value=" <?php echo $Age?>">
	
	<button type='submit'>ajoute</button>
	</form>
</body>
</html>