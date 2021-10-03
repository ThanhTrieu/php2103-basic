<?php

if(isset($_POST['btnLogin'])) {
    $email = $_POST['txtEmail'] ?? '';
    $pass = $_POST['txtPassword'] ?? '';
    
    // validate data
    if(empty($email) || empty($pass)) {
        // dieu huong trang quay ve 
        header('Location:../unit-01.php?state=error');
    } else {
        $fopen = fopen('database/data.txt', 'r');
        if($fopen){
            $record = fread($fopen, filesize('database/data.txt'));
            fclose($fopen);
            if(!empty($record)){
                $arrRecord = explode('/', $record);
                if($arrRecord[0] === $email && $arrRecord[1] === $pass){
                    header('Location:../home.php');
                } else {
                    header('Location:../unit-01.php?state=not_login');
                }
            } else {
                header('Location:../unit-01.php?state=empty');
            }
        } else {
            header('Location:../unit-01.php?state=fail');
        }
    }
}