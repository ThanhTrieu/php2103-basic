<?php
session_start();

function handleLogin() {
    if(isset($_POST['btnLogin'])){
        $email = strip_tags($_POST['txtEmail'] ?? '');
        $password = strip_tags($_POST['txtPassword'] ?? '');
        $rememberMe = strip_tags($_POST['chkCheckMe'] ?? '');

        if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)){
            // kiem tra xem thong tin nhap chua
            if($email === 'admin@gmail.com' && $password === '123'){
                if($rememberMe === 'on'){
                    setcookie('loginAppExample','loginAppExample', time()+ 3600, "/", "", 0);
                } else {
                    setcookie('loginAppExample','loginAppExample', time()+ 300, "/", "", 0);
                }
                // luu thong tin vao session
                $_SESSION['emailUser'] = $email;
                // vao trang home
                header('Location:../home.php');
            } else {
                header("Location:../login.php?state=fail");
            }
        } else {
            header("Location:../login.php?state=empty");
        }
    }
}
handleLogin();