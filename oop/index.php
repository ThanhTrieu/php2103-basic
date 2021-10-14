<?php

//namespace OOP;

require 'bootstrap/App.php';
use oop\bootstrap\App;
use oop\controller\ProductController;

new App();

$pd = new ProductController();

// goi duoc phuong thuc lay data tu controller
$data = $pd->getDataView();
echo '<pre>';
print_r($data);