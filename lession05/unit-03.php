<?php
// kho dong session 
 session_start();
 // tao session
 $_SESSION['name'] = 'Van Teo';
 $_SESSION['id'] = 113;
 $_SESSION['email'] = 'vanteo@gmail.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> session</title>
</head>
<body>
    <a href="session.php"> get data from session</a>
</body>
</html>