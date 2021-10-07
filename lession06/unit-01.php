<?php

$string = 'php dang hoc php co ban php buoi 1234';

// tim xem php co nam trong chuoi ko voi btcq
// khai bao 1 btcq de quy dinh quy tac tim kiem ntn ?
// su dung ham co san cua php de kiem tra lai btcq vua khai bao la dung hay sai
$btcq = '/[0-9]{2}/';

if(preg_match($btcq, $string)){
    echo 'oke';
} else {
    echo 'No';
}
echo "<br/>";

// kiem tra 1 so co 3 chu va so do la so le ?
// su dung btcq de xu ly'
$btcq2 = '/^[1-9][0-9][1,3,5,7,9]$/';
$n = '523';
if(preg_match($btcq2, $n)){
    echo 'Y';
} else {
    echo 'N';
}
echo "<br/>";

// kiem tra so dien thoai 10 cua nha mang VT
// 097,098,096 - 03 2-9
$btcq3 = '/^09[6,7,8]\d{7}|03[2-9]\d{7}$/';
$phone = '0395091304';
if(preg_match($btcq3, $phone)){
    echo 'Yes';
} else {
    echo 'Nooooo';
}

// kiem tra so co 5 chu so - cap so thu nhat la so le, cap so thu 2 la so chan va so 5 chu so nay chia het cho 5
// abcde
$btcq4 = '/^[1-9][^0,2,4,6,8]\d[^1,3,5,7,9][0,5]$/';
// kiem tra dinh dang ngay thang nam cua nguoi viet
// dd/mm/yyyy
// 07/10/2021 : oke
// 07-10-2021: No
// 7/10/2021: No
// 29/02/2021
// them \ dang truoc ky tu ma trung voi ky tu la cu phap cua btcq
$btcq5 = '/^(0[1-9]|1\d|2\d|3[0,1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';
$today = '07/10/2021';
if(preg_match($btcq5, $today, $matches)){
    // $matches: chua ket qua tra ve ma btcq no so khop hay tim kiem duoc
    echo '<pre>';
    print_r($matches);
}