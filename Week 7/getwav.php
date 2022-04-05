<?php

  header("Content-type: audio/wav");

  $conn = mysqli_connect('localhost', '22015094', 'mysqluser', 'monster');

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET[id] ."';";
	
  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
