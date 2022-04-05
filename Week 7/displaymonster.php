<?php
  
  $conn = new mysqli('localhost', '22015094', 'mysqluser', 'db1_22015094');

$sql = "SELECT id, mame from monster;";

$result = mysqli_query($sql, $conn);
$row = mysqli_fetch_array($result);

echo "<img src='getjpg.php?id=" . $row[id]. "'/>";

mysqli_close($conn);
?>
