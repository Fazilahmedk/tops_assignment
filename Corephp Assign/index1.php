<?php
// Input marks for five subjects
$physics = 85;
$chemistry = 90;
$biology = 78;
$mathematics = 92;
$computer = 88;

// Calculate the total marks
$totalMarks = $physics + $chemistry + $biology + $mathematics + $computer;

// Calculate the percentage
$percentage = ($totalMarks / 500) * 100;

// Determine the grade based on the percentage
if ($percentage >= 90) {
    $grade = 'A+';
} elseif ($percentage >= 80) {
    $grade = 'A';
} elseif ($percentage >= 70) {
    $grade = 'B';
} elseif ($percentage >= 60) {
    $grade = 'C';
} elseif ($percentage >= 50) {
    $grade = 'D';
} else {
    $grade = 'F';
}

// Display the result
echo "Total Marks: $totalMarks\n";
echo "Percentage: $percentage%\n";
echo "Grade: $grade\n";
?>
