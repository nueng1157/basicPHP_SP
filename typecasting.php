<?php

$price ="100.50";

$dalivery = 50;

$total = $price + $dalivery;

echo "before= ".gettype($total)."<br>";
echo $total."<br>";
//type casting

$total=(integer)$total."<br>";
echo "after= ".gettype($total)."<br>";


echo "<hr>";
$sum = "500.99";
echo "before= ".gettype($sum)."<br>";
echo $sum."<br>";
$sum=(double)$sum;
echo "after= ".gettype($sum)."<br>";
echo $sum."<br>";
echo "<hr>";
$a =(integer)10.9;
$b =(integer)20.5;
$c =$a+$b;
echo $c;
echo "<hr>";

?>