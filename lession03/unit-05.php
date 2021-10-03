<?php
$pathFile = '../public/data.txt';

if(file_exists($pathFile)){
    echo "File co ton tai";
} else {
    echo "File khong ton tai";
}

if(is_writeable($pathFile)){ // file co quyen ghi du lieu ko?
    // xoa bo noi dung cu va ghi noi dung moi
    file_put_contents($pathFile, 'Dang hoc php co ban');
}

// doi ten file
//rename('../public/content.txt','../public/data.txt');

// copy file
//copy($pathFile,'../public/content.txt');

//unset(); // xoa bien

// xoa file
if (file_exists('../public/content.txt')) {
    unlink('../public/content.txt');
}

// tao thu muc
if(!is_dir('../public/data')){
    mkdir('../public/data');
}