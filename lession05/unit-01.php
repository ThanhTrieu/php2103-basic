<?php

$email = 'test@gmail.com';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'OK';
} else {
    echo 'ERROR';
}
echo '<br/>';

$url = "https://www.abc.com?tên=văn tèo";
$newUrl = filter_var($url, FILTER_SANITIZE_URL);// xoa bo di cac ki tu ko hop le
echo $newUrl;


