<?php
    session_start();
    // xoa tat
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete session</title>
</head>
<body>
    <h1> session deleted</h1>
    <a href="session.php"> get data from session</a>
</body>
</html>