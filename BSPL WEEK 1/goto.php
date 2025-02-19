<?php
$x=10;
echo"before condition";
echo"</br>";
if($x==20){
  goto jump;
}
$name="parth";
echo $name;
echo"</br>";
//
jump:
echo"jumped";
?>