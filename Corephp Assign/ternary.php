<?php
$num1 = 25;
$num2 = 15;
$num3 = 30;

// Using ternary operator to find the largest number
$largest = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

echo "The largest number among $num1, $num2, and $num3 is: $largest";
?>
