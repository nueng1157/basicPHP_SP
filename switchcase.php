<?php
// $month = 8;

// switch($month){
//     case 1: echo "มกราคม";
//     break;
//     case 2: echo "กุมภาพันธ์";
//     break;
//     case 3: echo "มีนาคม";
//     break;
//     case 4: echo "เมษายน";
//     break;
//     case 5: echo "พฤษภาคม";
//     break;
//     case 6: echo "มิถุนายน";
//     break;
//     case 7: echo "กรกฎาคม";
//     break;
//     default: echo "ไม่พบข้อมูลเดือน";
// }
// ถ้ากู้ 5 ปี ดอกเบี้ย 10%
// ถ้ากู้ 10 ปี ดอกเบี้ย 20%

$year = 15;

switch($year){
    case 5: 
        echo "ระยะเวลากู้ = " .$year. " ปี ดอกเบี้ย 10%";
        break;
    case 10: 
        echo "ระยะเวลากู้ = " .$year. " ปี ดอกเบี้ย 20%";
        break; 
    default: 
        echo "ไม่พบข้อมูล ";
}
?>