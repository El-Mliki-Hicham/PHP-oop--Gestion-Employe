<?php

$connect = mysqli_connect("localhost",'hicham',"mlikihii",'demo');
$sqlQ = 'SELECT Prenom,Nom,Age FROM personnes';
$result = mysqli_query($connect,$sqlQ);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);


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
    <?php

foreach($data as $value){
    ?>
<p>firstname <?php  echo $value['Prenom']?></p>
<p>firstname <?php  echo $value['Nom']?></p>
<p>firstname <?php  echo $value['Age']?></p>
    



<?php }?>
</body>
</html>