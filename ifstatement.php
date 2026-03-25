<?php

    $balance = 1000;
    $transfer = 800;
    echo "เงินในบัญชี  =" .$balance."<br>";

    // if($transfer <= $balanace){
    //     echo "สามารถกดเงินได้ <br>";
    // }
    // echo "คืนบัตรกดเงิน";

        if($transfer <= $balance){
        echo "สามารถกดเงินได้ <br>";
        $balance =$balance-$transfer; //คำนวณยอดคงเหลือ
        echo "ยอดคงเหลือ =" .$balance. "<br>";
    }
    echo "คืนบัตรกดเงิน";
?>