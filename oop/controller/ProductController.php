<?php

namespace oop\controller;

use oop\model\Product_model;
// khong can require file Product_model

class ProductController
{
    private $pdModel;

    public function __construct()
    {
        $this->pdModel = new Product_model;
    }

    public function getDataView()
    {
        return $this->pdModel->getAllData();
    }
}