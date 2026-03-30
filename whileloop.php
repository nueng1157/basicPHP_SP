<?php

//ทำซ้ำเมื่อเงื่อนไขใน while เป็นจริง
$count = 1;
$limit = 10;

while($count <= $limit){
    echo "รอบที่ " .$count . "<br>";
    $count++;
}
echo "จบโปรแกรม <br>";
?>
