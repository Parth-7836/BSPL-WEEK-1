<?php
// Initialize a variable
$x = 5;

// Pre-increment
$y = ++$x; 
echo "Pre-increment: ";
echo "x = $x, y = $y <br>"; 

// Post-increment
$x = 5; 
$y = $x++;
echo "Post-increment: ";
echo "x = $x, y = $y <br>";

// Pre-decrement
$x = 5;
$y = --$x;
echo "Pre-decrement: ";
echo "x = $x, y = $y <br>";

// Post-decrement
$x = 5;
$y = $x--;
echo "Post-decrement: ";
echo "x = $x, y = $y <br>";

?>