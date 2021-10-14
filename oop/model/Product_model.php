<?php

namespace oop\model;

class Product_model
{
    public function getAllData()
    {
        return [
            [
                'id' => 1,
                'name' => 'iphone',
                'price' => 1000
            ],
            [
                'id' => 2,
                'name' => 'samsung',
                'price' => 1000
            ],
            [
                'id' => 3,
                'name' => 'Bphone',
                'price' => 1000
            ]
        ];
    }
}