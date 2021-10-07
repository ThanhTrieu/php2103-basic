<?php

function getDataVirusCorona() {
    $urlService = 'https://api.covid19api.com/summary';
    // truy cap vao no va lay du lieu ve
    // su dung CURL PHP de xu ly 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlService);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $output = curl_exec($ch);
    curl_close($ch);

    // $output : json string
    $data = [];
    if(!empty($output)) {
        // conver to array
        $data = json_decode($output, true);
    }
    return $data;
}
