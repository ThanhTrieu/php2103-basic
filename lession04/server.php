<?php
// su dung super global $_GET de nhan lay toan bo thong tin gui len
// $_GET : la 1 array
// echo "<pre>";
// print_r($_GET);

$id = $_GET['id'] ?? ''; // isset($_GET['id']) ? $_GET['id'] : '';
echo $id;