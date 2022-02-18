<?php
    include "configeration.php";

    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $Delete = "DELETE FROM personnes WHERE id= '$id'";

            mysqli_query($connect, $Delete);
            header('Location: index.php');
            
        
    }
?>