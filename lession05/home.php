<?php
    session_start();
    require 'check-login.php';
    if(!checkUserLogin()){
        // chua login
        header('Location:login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <?php
        $emailSession = $_SESSION['emailUser'] ?? '';
        $cookieUser = $_COOKIE['loginAppExample'] ?? '';
    ?>
    <h1> welcome <?= $emailSession ?> to home page !</h1>
    <p> cookieUser: <?= $cookieUser ; ?></p>

    <form method="post" action="server/handle-logout.php">
        <button type="submit" name="btnLogout"> Logout </button>
    </form>
</body>
</html>