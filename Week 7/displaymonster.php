<?php
  
  $conn = mysqli_connect('localhost', '22015094', 'mysqluser', 'db1_22015094');

$sql = "SELECT id, name from monster;";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row['id']. "'/>";

mysqli_close($conn);
?>
