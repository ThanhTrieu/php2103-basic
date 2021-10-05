<?php
// khoi tao session
session_start();

// lay gia tri cua session
$name = $_SESSION['name'] ?? '';
$id = $_SESSION['id'] ?? '';
$email = $_SESSION['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data session</title>
</head>
<body>
    <p>Data session</p>
    <p> name: <?= $name; ?></p>
    <p> id: <?= $id; ?></p>
    <p> email: <?= $email; ?></p>
    <a href="delete-session.php"> delete session</a>
</body>
</html>
