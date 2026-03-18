<?php
$total1 = null;
$total2= "";
$total3=100;
$total4 = "onenueng";

echo "ตัวแปร total1 = ". $total1."<br>";
echo "ตัวแปร total2 = ". $total2."<br>";
echo "ตัวแปร total3 = ". $total3."<br>";
echo "ตัวแปร total4 = ". $total4."<br>";



echo "ตัวแปร isset total1 = ". isset($total1)."<br>";
echo "ตัวแปร isset total2 = ". isset($total2)."<br>";
echo "ตัวแปร isset total3 = ". isset($total3)."<br>";
echo "ตัวแปร isset total = ". isset($total4)."<br>";


echo "ตัวแปร empty total1 = ". empty($total1)."<br>";
echo "ตัวแปร empty total2 = ". empty($total2)."<br>";
echo "ตัวแปร empty total3 = ". empty($total3)."<br>";
echo "ตัวแปร empty total = ". empty($total4)."<br>";

echo "ตัวแปร isnull total1 = ". is_null($total1)."<br>";
echo "ตัวแปร isnull total2 = ". is_null($total2)."<br>";
echo "ตัวแปร isnull total3 = ". is_null($total3)."<br>";
echo "ตัวแปร isnull total = ". is_null($total4)."<br>";


echo "ตัวแปร var_dump total1 = ". var_dump($total1)."<br>";
echo "ตัวแปร var_dump total2 = ". var_dump($total2)."<br>";
echo "ตัวแปร var_dump total3 = ". var_dump($total3)."<br>";
echo "ตัวแปร var_dump total = ". var_dump($total4)."<br>";

unset($total4);
echo "ตัวแปร total4 = ". $total4."<br>";


?>