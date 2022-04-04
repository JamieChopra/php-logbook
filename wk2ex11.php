<?php

  $total = 0;

  $mymarks["CO403"] = 83;
  $mymarks["CO452"] = 72;
  $mymarks["CO456"] = 69;
  $mymarks["CO506"] = 92;
  $mymarks["CO556"] = 86;
  $mymarks["CO558"] = 76;

  foreach($mymarks as $index => $value)
  {
    echo "For  $index  my grade was  $value <br/>";
    
    $total = $total + $mymarks[$index];
  }

  $average = $total /  6;

  echo "My average mark was $average";

?>