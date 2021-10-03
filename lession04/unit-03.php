<?php
// xu ly ngay thang
$today = date('d/m/Y H:i:s');
//echo $today;
$yesterday = '02-10-2021';
$todate = '03-10-2021';

$timeYes = strtotime($yesterday);
$timeTodate = strtotime($todate);

//echo $timeYes .  ' --- ' . $timeTodate;
if($timeYes < $timeTodate){
    echo 'OKE';
}
echo '<br/>';

$addTime = date('Y-m-d', strtotime('+3 days'));
//echo $addTime;
echo date('Y-m-d', $timeTodate);
echo '<br/>';

$date_int = mktime(0, 0, 0, 10, (3 + 12), 2021);
echo date('Y-m-d', $date_int);
