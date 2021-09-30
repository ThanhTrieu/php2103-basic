<?php
// xu ly ve file php
$fopen = fopen('../public/data.txt','r');
if($fopen){
    //echo "da co the ket noi mo vao file";
    $data = fread($fopen, filesize('../public/data.txt'));
    echo $data;
} else {
    echo "Khong the mo duoc file";
}