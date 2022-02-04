<?php

$fichier = file_get_contents("person.json");
$data = json_decode($fichier);

?>
<a href="inser.php">insert</a>
<table>
    <tr>
        <th>no</th>
        <th>First Name</th>
        <th>Last Name </th>
        <th>Age </th>
    </tr>
</table>
<?php

// for ($index=0; $index <; $index++) { 

     $index=0;foreach ($data as $person){
        $index++;  
    
?>
<tr>

<td><?php echo $index;?></td>
<td><?php echo $person[0];?></td>
<td><?php echo $person[1];?></td>
<td><?php echo $person[2];?></td>



</tr>
<?php }?>




</div>
</body>
</html>


