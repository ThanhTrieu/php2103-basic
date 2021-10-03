<?php
// xu ly ve file php
$fopen = fopen('../public/data.txt','a+');
if($fopen){
    // ghi file
    $content = 'learning php';
    fwrite($fopen, $content);
    
    // vi dung luong file da thay doi - can mo lai file de doc du lieu
    $f = fopen('../public/data.txt','r');
    $data = fread($f, filesize('../public/data.txt'));

    // dong file
    fclose($f);
    fclose($fopen);
} else {
    echo "Khong the mo duoc file";
}