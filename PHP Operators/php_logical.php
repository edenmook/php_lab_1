<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  

<?php
$x = 100;  
$y = 50;
echo "<br>";
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?> 

<?php
$x = 100;  
$y = 50;
echo "<br>";
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>  

<?php
$x = 100;  
$y = 50;
echo "<br>";
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>  

<?php
$x = 100;  
$y = 50;
echo "<br>";
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  

<?php
$x = 100;  
echo "<br>";
if ($x !== 90) {
    echo "Hello world!";
}
?>  

</body>
</html>
