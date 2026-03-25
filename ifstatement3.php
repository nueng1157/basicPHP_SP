<?php
    
    $balance = 1000;
    $withdraw =1000;
    $a = $withdraw<=$balance; // ผลการเปรียบเทียบจำนวนเงิน
    $b = $withdraw>0; // เงินที่ถอนต้องมีค่ามากกว่า 0 


    echo "เงินในบัญชี  =" .$balance."<br>";
    echo "จำนวนเงินที่ถอน  = " .$withdraw."<br>";
    echo "<hr>";

        //if($a && $b){
        if(!($withdraw<=$balance) || $withdraw>0){
        echo "สามารถกดเงินได้ <br>";
        $balance -=$withdraw; //คำนวณยอดคงเหลือ
        echo "ยอดคงเหลือ =" .$balance. "<br>";
    }else{
        echo "ยอดเงินคงเหลือไม่พอ<br>";
    }
    echo "คืนบัตรกดเงิน";


?>