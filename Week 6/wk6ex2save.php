<?php	

	// Connect to server and select database
    $link= mysqli_connect('localhost', '22015094', 'mysqluser', 'db1_22015094');

    $sql= "UPDATE test SET name='{$_POST["txtname"]}', 
           email= '{$_POST["txtemail"]}', 
           phone_number= '{$_POST["txttelno"]}' 
           WHERE ID = '{$_GET["id"]}';";


	//$sql = "SELECT * FROM test WHERE ID = '$_GET["id"]' ";
	//Execute query
	$result = mysqli_query($link, "SELECT * FROM test WHERE ID = '$_GET[id]' ");

    echo $sql

    if ($result)
    {
        echo "You have successfully saved the new data!";
    }
?>