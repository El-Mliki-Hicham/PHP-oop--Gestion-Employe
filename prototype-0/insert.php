<?php 
    if ( !empty($_POST)) { 
        // post values
        $Produit = $_POST['produit'];
        $Prix    = $_POST['Prix'];
      
		$person = array($Produit, $Prix); 
      
		$fichier = file_get_contents('produits.json');
		$data = json_decode($file, true);
	
		array_push($data, $person);
		file_put_contents("produits.json", json_encode($data));
		header("Location: index.php");

    }
?>
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName" name="produit" placeholder="Prix">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" name="Prix" placeholder="Prix">
        		<span></span>
			</div>
			
			
			<div class="form-actions">
					<button type="submit">ajoute</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>
