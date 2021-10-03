<?php
header('Content-Type: text/html; charset=utf-8');

require 'test-01.php'; //neu co loi se dung chuong trinh va thong bao loi
//include 'test-01.php'; // neu co loi van thuc thi chuong trinh va canh bao
 
if(kiemTraChanLe(10)){
    echo 'oke';
} else {
    echo 'no';
}
echo '<br/>';
echo 'đang hoc php';