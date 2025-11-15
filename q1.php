<?php
// Variables with different data types
$intVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, Sabina!";
$boolVar = true;
$arrayVar = array("Java", "XML", "XSL", "XSD");
$nullVar = null;

// a. Print all data using echo and print
echo "Integer: $intVar<br>";
print "Float: $floatVar<br>";
echo "String: $stringVar<br>";
print "Boolean: " . ($boolVar ? 'true' : 'false') . "<br>";
echo "Null: ";
print $nullVar;
echo "<br><br>";

// b. Display content of array using print_r and var_dump
echo "Array using print_r:<br>";
print_r($arrayVar);
echo "<br><br>";

echo "Array using var_dump:<br>";
var_dump($arrayVar);
echo "<br><br>";

// c. Display result of checking data types
echo "Type Checking:<br>";
echo "Is \$intVar an integer? " . (is_int($intVar) ? "Yes" : "No") . "<br>";
echo "Is \$floatVar a float? " . (is_float($floatVar) ? "Yes" : "No") . "<br>";
echo "Is \$stringVar a string? " . (is_string($stringVar) ? "Yes" : "No") . "<br>";
echo "Is \$boolVar a boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "<br>";
echo "Is \$arrayVar an array? " . (is_array($arrayVar) ? "Yes" : "No") . "<br>";
echo "Is \$nullVar null? " . (is_null($nullVar) ? "Yes" : "No") . "<br>";
?>
