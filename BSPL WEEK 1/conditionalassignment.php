<?php

$age = 25;

// Ternary operator
$isAdult = ($age >= 18) ? true : false; 
echo "Is Adult: ";
var_dump($isAdult);
echo"</br>";
// Null coalescing operator (??)
$username = $_GET['username'] ?? 'Guest'; 
echo "Username: " . $username . "<br>";
echo"<br/>";
?>