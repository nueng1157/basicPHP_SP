<?php   
//พื้นที่ = กว้าง x ยาว

$width = 30;
$height= 30;



if($width>0 && $height >0){
    $area = $width * $height;
    echo "พื้นที่สี่เหลี่ยม = " .$area. " ตารางนิ้ว";
}else{
    echo " ต้องป้อนตัวเลขความกว้างและความสูงมากกว่า 0";
}





?>