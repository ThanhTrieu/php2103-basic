<?php

$a = 10;
// kiem tra xem bien nay ton tai ko ?
// neu co thi xu ly logic nao do, nguoc lai xu ly logic
$x = isset($a) ? $a : 11;
// kiem tra $a co ton tai ko, neu co gan gia tri $x = $a, neu khong gan gia tri $x = 11;
// echo $x;

$y = $a ?? 11; // Null Coalescing Operator 
//echo $y;

$i = 91;
$j = 91;
$m = $i <=> $j; // Spaceship Operator 
//echo $m;

// menh de if
if($i < 100){
    // xu ly logic o day
    // de thuc thi lenh ben trong nay thi thoa man dieu kien - bieu thuc(gia tri) trong menh de dieu kien if phai la dung (tra ve true);
    // neu ko thoa man dieu kien ko thuc thi lenh ben trong
}

// menh de if ...else
if($j > 100){
    // thuc thi lenh ben trong
} else {
    // thuc thi lenh ben trong
    // khi nao thi lenh ben trong dc thuc thi
    // bieu thuc - trong menh de if ko dung - lap tuc thuc thi ngay lenh ben trong nay
}

// menh de if..else long vao nhau
if($j < 100) {
    // do something
} elseif ($j < 90) {
    // do something
} elseif ($j < 80) {
    // do something
} elseif ($j < 70) {
    // do something
} else {
    // do something
}
// chung ta co qua nhieu dien kien gia thiet can kiem tra thi dung no

switch ($j) {
    case 100:
        // $j == 100
        // do something
    break;
    case 90:
        // $j == 90
        // do something
    break;
    case 80:
        // do something
    break;
    default:
        // do something
    break;
}

// vong lap
// for ...
for($i = 1; $i <= 10; $i++) {
    echo $i;
}

// while ...
$b = 1;
// luon luon kiem tra dieu kien truoc khi thuc thi vong lap
// dieu kien trong menh de while phai la dung thi moi thuc thi
// 0 - n;
while ($b < 10) {
    echo $b;
    $b++;
}

// do ... while
// kiem tra dieu kien sau - luon luon thuc thi it nhat la 1 vong lap
// 1 - n
$k = 10;
do {
    echo $k;
    $k++;
} while($k < 30);
echo "<br/>";

/////////////////////////////////////////////////////////////

$t = null; // null
// $t = ''; // empty

// == : so sanh ve mat gia tri - ko quan tam den kieu du lieu
// '' == false = 0
// 1 = true;
// nhay cam trong lap trinh.

$checking = false; // bool
if($checking === ''){ // string
    echo 'OK';
} else {
    echo 'NO';
}
echo "<br/>";

// Numeric string - chuoi so (trong chuoi chi chua so).
$n1 = '100';
$n2 = 200;
$n3 = $n1 + $n2;
echo $n3;
///////////////////////////////////////////////////
echo "<br/>";

$t1 = 1;
$t2 = 2;
$t3 = (++$t1) + ($t2++) - ($t1--) + (--$t2) - ($t1++) - (++$t2);
//       2     +   2    -   2     +   2     -   1     -   3   
// ????
echo $t3; // 0