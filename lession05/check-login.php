<?php
if (session_status() === PHP_SESSION_NONE) {
    // vi file nay sau nay se nhung sang noi khac
    session_start();
}

function getEmailSession() {
    $email = trim($_SESSION['emailUser'] ?? '');
    return $email;
}

function checkUserLogin() {
    $email = getEmailSession();
    if(empty($email)) {
        return false;
    }
    return true;
}