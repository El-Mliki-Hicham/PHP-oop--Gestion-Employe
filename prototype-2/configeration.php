<?php
   $connect = mysqli_connect('localhost', 'hicham', 'mlikihii', 'demo');

   // check connection
 if(!$connect){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>