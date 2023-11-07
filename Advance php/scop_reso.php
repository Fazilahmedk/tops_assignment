
<?php


class MathUtility {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }
}

// Accessing static methods using ::
$result1 = MathUtility::add(5, 3);        // Calls the add method
$result2 = MathUtility::subtract(10, 2);  // Calls the subtract method

echo "Addition: " . $result1 . "<br>";
echo "Subtraction: " . $result2;

?>
