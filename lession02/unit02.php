<?php

$n3 = 10; // toan cuc

// xu ly ham trong php
function sumNumber($n1, $n2 = 2) {
    global $n3;

    $n4 = 20; // bien cuc bo;

    // $n2 = 2; gan gia tri mac dinh cho tham so hinh
    // function : keyword(bat buoc)
    // tongHaiSo: ten ham - ltv tu dinh nghia
    // $n1, $n2 tham so (tuy y dat ten cho co y nghia voi logic xu ly)
    
    return $n1 + $n2 + $n3 + $n4;
    // keyword return : tra ket qua ve cho ham - thoat khoi ham
    // logic ben duoi tu khoa return ko chay nua
}

/*
    int name(int a, int b) {
        return 1;
    }
    void man() {
        return 0;
    }
*/
// goi ham ra su dung
// goi dung ten ham ra va truyen tham so vao ham neu co
$result = sumNumber(1, 5);
// 1, 5: tham so thuc - tham so that
// echo $result;

// viet ham kiem tra 1 so co phai so nguyen to ???
function kiemTraSoNguyenTo($n) {
    // ham nay se kiem tra tham n truyen vao co phai la 1 so nguyen to ko?
    // no la so chia het cho 1 va chinh no
    // can viet ma lenh lap trinh de xu ly cai yeu cau do
    // phai viet nhu the nao ??? thanh thao ngon ngu lap trinh

    if($n <= 1){
        return false;
    }
    if($n === 2) {
        return true;
    }
    // can kiem tra tu so 2 tro di - cho den so can kiem tra - de biet dc so co phai so nguyen to hay ko?
    for($i = 2; $i <= sqrt($n); $i++) {
        // trong cac so nam pham vi nay thi $n khong chia het cho bat ky thang nao
        // thi dung la so nguyen to
        if($n % $i === 0){
            return false;
        }
    }
    return true;
}

function testStatic() {
    static $count = 0; // luu lai gia tri cua bien sau moi lan goi ham ra su dung
    $count++;
    echo $count;
    echo "<br/>";
}
testStatic();
testStatic();
testStatic();
echo "<br/>";
// tham chieu(tham bien) va tham tri
// tham tri: bien truyen vao ham - di ra khoi ham khong bi thay doi gia tri

$thamTri = 10;
echo $thamTri;
echo "<br/>";
function testThamTri($t) {
    $t += 100;
    return $t;
}
testThamTri($thamTri);
// bien $thamTri ko bi anh huong boi logic trong ham
echo $thamTri;
echo "<br/>";

$thamChieu = 10;
echo $thamChieu;
echo "<br/>";
function testThamChieu(&$t) {
    $t += 100;
    return $t;
}
testThamChieu($thamChieu);
// bien $thamTri ko bi anh huong boi logic trong ham
echo $thamChieu;
echo "<br/>";

/*********** Variadic functions *****************/

testVariadic(1,2,3,4,5,6,7,8,9);

// declare function - global function
function testVariadic(...$test) {
    // nhan bat ky tham nao nao truyen vao - khong quan tam den so luong
    // Variadic: se la 1 mang chua tat gia tri cua cacs tham so truyen vao
    var_dump($test);
}

echo "<br/>";

/***** Anonymous functions - lambda  ********/
// ham se ko co ten - thong thuong se dc dai dien qua 1 bien
$z = 10;
$kiemTraChanLe = function($n) use ($z) {
    // use : Closure
    if(($n+$z) % 2 === 0) {
        return true;
    }
    return false;
}; // co cham phay;

if($kiemTraChanLe(10)){
    echo "la so chan";
} else {
    echo "la so le";
}
