<?php

$x = true;
$y = false;

// AND (&&) operator
echo "x && y ";
var_dump($x && $y); // Both conditions must be true
echo "</br>";
// OR (||) operator
echo "x || y ";
var_dump($x || $y); // At least one condition must be true
echo "</br>";
// NOT (!) operator
echo "!x ";
var_dump(!$x); // Reverses the boolean value
echo "</br>";
// XOR (^) operator
echo "x ^ y ";
var_dump($x ^ $y); // Only one condition must be true
echo "</br>";
?>