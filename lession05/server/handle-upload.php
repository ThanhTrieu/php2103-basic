<?php
$pathUpload = 'uploads/';

function checkTypeFile($type) {
    $allowTypes = ['image/png','image/jpg','image/jpeg'];
    if(in_array($type,$allowTypes)){
        return true;
    }
    return false;
}

function checkSizeFile($size) {
    // $size : don vi kb
    // $size <= 3M
    // ???
    if($size <= 3*1024){
        return true;
    }
    return false;
}

function uploadFileToServer() {
    global $pathUpload;

    if(isset($_POST['btnUpload'])){
        // hien thi thong tin cua file tu phia client gui len
        // php ho tro 1 bien super global $_FILES - bien kieu mang chua thong tin ve file
        if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
            // thuc su nguoi dung da chon file gui len
            if($_FILES['file']['error'] === 0){
                // file ko co loi
                $nameFile = $_FILES['file']['name'];
                $tmpFile = $_FILES['file']['tmp_name'];
                $type = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                if(checkTypeFile($type) && checkSizeFile($size)){
                    $upload = move_uploaded_file($tmpFile, $pathUpload.$nameFile);
                    if ($upload) {
                        header("Location:../upload.php?state=success&name={$nameFile}");
                    } else {
                        header("Location:../upload.php?state=fail");
                    }
                } else {
                    header("Location:../upload.php?state=err_size_type");
                }
            }

        } else {
            // nguoi chua chon file nao de upload
            header("Location:../upload.php?state=error");
        }
    }
}
uploadFileToServer();