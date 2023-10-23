<?php
// Create an array with duplicate values
$array = [1, 2, 3, 2, 4, 5, 1];

// Remove duplicates
$uniqueArray = array_values(array_unique($array));

// Print the unique array
print_r($uniqueArray);
?>
