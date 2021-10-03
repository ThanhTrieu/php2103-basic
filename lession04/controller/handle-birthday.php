<?php
function checkYourBirthDay() {
    if(isset($_POST['btnCheck'])) {
        $yourBirthday = $_POST['yourBirthday'] ?? '';
        if(!empty($yourBirthday)) {
            // Y-m-d
            $arrYourBirthday = explode('-',$yourBirthday);
            $date  = $arrYourBirthday[2] ?? '';
            $month = $arrYourBirthday[1] ?? '';
            $year  = $arrYourBirthday[0] ?? '';

            $date  = (int)$date;
            $month = (int)$month;
            $year  = (int)$year; // nam sinh cua ban

            $nowYear = date('Y'); // nam hien tai;

            if(checkdate($month, $date, $year)){
                // kiem tra ngay sinh cua ho voi ngay hien tai
                $currentYourBirthday = "{$nowYear}-{$month}-{$date}";
                $currentDay = date("Y-m-d");
                // so sanh 2 ngay nay voi nhau;
                $timeYourBirthday = strtotime($currentYourBirthday);
                $timeToday = strtotime($currentDay);
                if($timeToday > $timeYourBirthday){
                    // ??? qua sinh nhat roi
                    header('Location:../birthday.php?state=success&mess=over&d='.$yourBirthday);
                } elseif($timeToday === $timeYourBirthday) {
                    header('Location:../birthday.php?state=success&mess=happy&d='.$yourBirthday);
                } else {
                    // chua toi sinh nhat - tinh ra con bao nhieu ngay nua
                    $days = ($timeYourBirthday-$timeToday)/86400;
                    header('Location:../birthday.php?state=success&mess=wait&time='.$days.'&d='.$yourBirthday);
                }
            } else {
                header('Location:../birthday.php?state=error');
            }
        } else {
            header('Location:../birthday.php?state=empty');
        }
    }
}

checkYourBirthDay();