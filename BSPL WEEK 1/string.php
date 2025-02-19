<?php

// Concatenation operator (.)
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName; 
echo "Full Name: " . $fullName . "<br>"; 

// Concatenation assignment operator (.=)
$greeting = "Hello, ";
$greeting .= $fullName; 
echo $greeting . "<br>";

?>