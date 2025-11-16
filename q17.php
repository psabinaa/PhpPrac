<?php
function computeSum($a, $b) {
    $sum = $a + $b;
    return ($a === $b) ? $sum * 3 : $sum;
}

// Example usage:
$x = 10;
$y = 10;
$result = computeSum($x, $y);
echo "Result: $result";
?>