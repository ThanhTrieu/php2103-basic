<?php
// lay dc gia tri cookie
// su dung super global $_COOKIE : bien kieu mang chua cac thong tin ve cookie
$myCookie = $_COOKIE['T3H'] ?? '';
echo $myCookie;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoa cookie</title>
</head>
<body>
    <a href="delete-cookie.php">delete cookie</a>
</body>
</html>