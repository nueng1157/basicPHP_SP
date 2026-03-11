<?php
$price =50; //integer;
$price1 =-20;
$score = 90.5; //double;
$name = "Onenueng"; //string;
$isvalid = false; //boolean;

$price = $price+100;

echo $name."<br>";

echo $isvalid."<br>";

echo $price."<br>";

echo $price1."<br>";

echo $score."<br>";
echo "<hr>";
echo gettype($name)."<br>";
echo gettype($price)."<br>";
echo "before= ".gettype($score)."<br>";
echo "<hr>";
echo gettype($isvalid)."<br>";

settype($score, "integer");
echo "after= ".gettype($score);
?>