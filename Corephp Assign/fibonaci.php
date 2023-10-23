<?php
$n = 20; // Number of terms in the series

$first = 0;
$second = 1;

echo "Fibonacci Series for the first $n terms: \n";

for ($i = 0; $i < $n; $i++) {
    if ($i <= 1) {
        $next = $i;
    } else {
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }

    echo $next;

    if ($i < $n - 1) {
        echo ", ";
    }
}
?>
