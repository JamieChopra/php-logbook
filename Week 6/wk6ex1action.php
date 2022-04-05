<?php
    $link= mysqli_connect('localhost', '22015094', 'mysqluser', 'db1_22015094');

	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";

	// Connect to server and select database
	
	// Execute sql statement	
	
    $sql = "SELECT * from test";
    
	$result = mysqli_query($link, "SELECT * FROM test");
	
	// Execute sql statement

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

    mysqli_free_result($result);
    mysqli_close($link);

?>
