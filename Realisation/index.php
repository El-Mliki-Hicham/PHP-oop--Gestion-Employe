
<?php

include 'configuration.php';
include 'employeManager.php';
$employeManager = new EmployeManager();
$data = $employeManager->getEmployes($connectData);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/fonts.index/icomoon/style.css">

    <link rel="stylesheet" href="css/css.index/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/css.index/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/css.index/style.css">

   
  </head>
  <body style=" background-color: #dee9ff;">
      
  

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5"><a href="insert.php"  class="btn btn-primary"> ajoute </a>  </h2>

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              
              
              <th scope="col">id</th>
              <th scope="col">Prenom</th>
              <th scope="col">Nom</th>
              <th scope="col">Age</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr scope="row">
              
            

            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['Prenom']?></td>
                <td><?= $value['Nom']?></td>
                <td><?= $value['Age']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id'] ?>" class="btn btn-danger">delete</a>
                </td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <tr>
            
              
            <?php }?>
       

          </tbody>
        </table>
      </div>


    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>