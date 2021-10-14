<?php
// oop php
class A 
{
    public function test()
    {
        return 'test';
    }

    public function __call($method, $args)
    {
        // $method:  ten phuong thuc minh goi
        // $args: mang chua tat tham so
        // ham nay se tu dong chay khi truy cap vao phuong thuc khong ton tai trong class
        echo '<br/>';
        echo "Ban vua truy cap vao phuong thuc {$method} khong ton tai trong class";
        print_r($args);
        echo '<br/>';
    }

    public static function __callStatic($method, $args)
    {
        // $method:  ten phuong thuc minh goi
        // $args: mang chua tat tham so
        // ham nay se tu dong chay khi truy cap vao phuong thuc la static khong ton tai trong class
        echo '<br/>';
        echo "Ban vua truy cap vao phuong thuc static {$method} khong ton tai trong class";
        print_r($args);
        echo '<br/>';
    }

    public function __get($property) 
    {
        // ham nay se tu dong chay neu truy cap vao thuoc tinh ko ton tai trong class
        echo '<br>';
        echo "Ban vua truy cap vao thuoc tinh  {$property} khong ton tai trong class - AAAAAAA";
        echo '<br>';
    }

    public function __set($key, $value)
    {
        // $key: ten thuoc tinh
        // $value: gia tri gan cho thuoc tinh
        echo '<br>';
        echo "Ban vua truy cap vao thuoc tinh {$key} khong ton tai trong class - Ban da gan gia tri : {$value} cho thuoc tinh";
        echo '<br>';
    }
}

$a = new A;

// truy cap vao phuong thuc khong ton trong class
echo $a->demo('Teo', 20);

// truy cap phuong thuc static khong tai trong class
echo A::view();

// truy cap vao thuoc tinh khong ton tai trong class va gan gia tri cho no
echo $a->name = 'Van Ty';