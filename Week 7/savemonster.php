<?php
  
$db = mysqli_connect('localhost', '22015094', 'mysqluser', 'db1_22015094');

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name']; 
$audio = $_FILES['monsteraudio']['tmp_name'];

?>