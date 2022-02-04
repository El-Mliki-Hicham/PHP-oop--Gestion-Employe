<?php

$fichier = file_get_contents("person.json");
$data = json_decode($fichier);
?>
<a href="insert.php">insert</a>