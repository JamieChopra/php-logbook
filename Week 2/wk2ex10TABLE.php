<?php
  $mymarks["Year 1"] = 55;
  $mymarks["Year 2"] = 65;
  $mymarks["Year 3"] = 75;
?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Year</th><th>Mark</th></tr> 
<?php
  foreach($mymarks as $index => $value)
  {
    echo "<tr><td>$index</td><td>$value</td></tr>";
  }	
?>
</table>
</body>
</html>