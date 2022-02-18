<?php
    include "configeration.php";

    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sqlDelete = "DELETE FROM personnes WHERE id= '$id'";

            mysqli_query($connect, $sqlDelete);
            header('Location: index.php');
            
        
    }
?>