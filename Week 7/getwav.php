<?php

  header("Content-type: audio/wav");

  $conn = new mysqli('localhost', '22015094', 'mysqluser', 'db1_22015094');

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
