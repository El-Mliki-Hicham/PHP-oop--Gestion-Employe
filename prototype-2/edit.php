<?php  
include 'configeration.php';



    if(isset($_GET['id'])){
        $id = $_GET['id'];
       
        $sqlDelete = "SELECT * FROM personnes WHERE id=$id";
        
        $result = mysqli_query($connect, $sqlDelete);
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        
            
            
            $Prenom = $data[0]['Prenom'];
            $Nom = $data[0]['Nom'];
            $Age = $data[0]['Age'];
             
            
       
    }

    if(!empty($_POST)){
        
        $Prenom = $_POST['Prenom'];
        $Nom = $_POST['Nom'];
        $Age = $_POST['Age'];

        $Update ="UPDATE personnes SET 
        Prenom='$Prenom',Nom='$Nom',Age='$Age' WHERE id=$id ";

        $result = mysqli_query($connect, $Update);
        header('location: index.php');
        
    };
    
?>

<input type="text"  value="<?=$Prenom ?>" name="Prenom">
	<input type="text"  value="<?=$Nom ?>"name="Nom">
	<input type="text" value="<?=$Age ?>" name="Age">
	
	<button type='submit'>Modifier</button>
	</form>
