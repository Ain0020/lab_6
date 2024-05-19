<!DOCTYPE html>
<html>
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>

<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Example values for length and width
$length = 2;
$width = 4;

// Calculate the area
$area = calculateArea($length, $width);

// Display the result
echo "<h3>The area of the rectangle with a width of " . $width . " and " . $length . " is " . $area . ".</h3>";
?>

</body>
</html>