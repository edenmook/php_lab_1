<!DOCTYPE html>
<html>
<body>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo "<br>";
var_dump($x == $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo "<br>";
var_dump($x === $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo "<br>";
var_dump($x != $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo "<br>";
var_dump($x <> $y);
?>  

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
echo "<br>";
var_dump($x !== $y);
?>  

</body>
</html>