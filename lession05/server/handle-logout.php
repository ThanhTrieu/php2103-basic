<?php
session_start();

function handleLogout() {
    if(isset($_POST['btnLogout'])){
        // xoa session
        session_destroy();
        header('Location:../login.php');
    }
}
handleLogout();