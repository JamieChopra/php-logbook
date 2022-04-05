<?php	

	// Connect to server and select database
    $link= mysqli_connect('localhost', '22015094', 'mysqluser', 'db1_22015094');

	$sql = "SELECT * from test where ID = '$_GET[id]' ";
    
	//Execute query
	$result = $mysqli->query($sql);

	$row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action=" " method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row[name] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row[phone_number]?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row[email]?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
