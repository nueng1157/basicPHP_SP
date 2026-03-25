<?php
    

    $balance = 1000;
    $withdraw = 2000;
    $a = $withdraw<=$balance; // ผลการเปรียบเทียบจำนวนเงิน
    $b = $withdraw>0; // เงินที่ถอนต้องมีค่ามากกว่า 0 


    echo "เงินในบัญชี  =" .$balance."<br>";
    echo "จำนวนเงินที่ถอน  =" .$withdraw."<br>";
    echo "<hr>";

        if($withdraw <= $balance){
        echo "สามารถกดเงินได้ <br>";
        $balance =$balance-$withdraw; //คำนวณยอดคงเหลือ
        echo "ยอดคงเหลือ =" .$balance. "<br>";
    }else{
        echo "ยอดเงินคงเหลือไม่พอ<br>";
    }
    echo "คืนบัตรกดเงิน";


?>