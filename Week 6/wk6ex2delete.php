<?php	

	// Connect to server and select database
    $mysqli= new mysqli('localhost', '22015094', 'mysqluser', 'db1_22015094');

    $sql= "DELETE FROM test WHERE ID = '{$_GET["id"]}';";

	//Execute query
	$result = $mysqli->query($sql);

    if ($result)
    {
        header('Location: wk6ex2.php');
    }
?>