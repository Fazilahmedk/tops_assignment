<?php

$array = ['apple', 'banana', 'cherry', 'date', 'fig', 'grape', 'kiwi', 'lemon'];

// Get a random key from the array
$randomKey = array_rand($array);

// Get the corresponding value
$randomValue = $array[$randomKey];

echo "Random value from the array: $randomValue\n";
?>
