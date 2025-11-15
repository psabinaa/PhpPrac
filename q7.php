<?php
function calculatePower($voltage, $current) {
    return $voltage * $current;
}

// Example usage:
$voltage = 220; // volts
$current = 5;   // amperes
$power = calculatePower($voltage, $current);
echo "Power: " . $power . " watts";
?>