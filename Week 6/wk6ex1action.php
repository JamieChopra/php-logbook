<?php
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]’)";

	// Connect to server and select database
	$link= mysqli_connect('intweb.bucks.ac.uk', '22015094', 'mysql', 'db1_22015094')
	// Execute sql statement		
    $result = mysqli_query($link, “SELECT * FROM test”);

	$sql = "SELECT * from test";
	
	// Execute sql statement
	$result = mysqli_query($link, “SELECT * FROM test”);

	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}
?>
