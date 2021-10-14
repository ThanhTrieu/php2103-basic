<?php

//namespace OOP;

require 'bootstrap/App.php';
use bootstrap\App;
new App();

$pd = new \controller\ProductController;

// goi duoc phuong thuc lay data tu controller
$data = $pd->getDataView();
echo '<pre>';
print_r($data);