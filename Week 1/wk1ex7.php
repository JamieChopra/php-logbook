<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
    $tax = 0.78;
	$gross = $hourlyrate * $hoursperweek;
    $netwage = $gross * $tax;
	echo $netwage;
?>
</body>
</html>
