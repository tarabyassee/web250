<?php
$startNum = 1;
$endNum = 100;

for ($i = $startNum; $i <= $endNum; $i++) {
  if ($i % 15 == 0) {
    print ("<p> fizzbuzz</p>");
  }

  elseif ($i % 3 == 0) {
    print ("<p> fizz</p>");
  }

  elseif ($i % 5 == 0) {
    print ("<p> buzz </p>");
  }

  else {
  print ("$i <br>");
  }
}

?>