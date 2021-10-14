<?php

// abstract class
abstract class A
{
    // duoc phep khai bao thuoc tinh -  khong duoc su dung tu khoa abstract
    // abstract public $name = 'Teo'; // sai
    public $name = 'Teo';
    protected $age = 20;
    private $money = 100;

    // phuong thuc
    // co 2 loai
    // 1 - phuong thuc khong co tu khoa abstract dung dang truoc
    public function demo()
    {
        // logic
    }
    protected function test()
    {
        // logic
    }
    private function example()
    {
        // logic
    }

    // 2 - phuong thuc co tu khoa abstract dung dang truoc
    // phuong thuc nay phai la phuong thuc rong va chi duoc phep su dung pham vi la public va protected

    abstract public function demov2();
    abstract protected function examplev2();

    // trong 1 class khong duoc phep dinh nghia 2 hoac nhieu phuong thuc cung ten
}
// khong the khoi tao doi tuong cho abstract class
// $a = new A; // sai

// abstract class ke thua abstract class khac lai dung tu khoa: extends
abstract class B extends A
{
    abstract public function check();
}

// class ke thua abstract class van khoa tu khoa extends
class C extends B
{
    // khi 1 class extends abstract class thi no phai override toan bo cac phuong thuc la abstract cua abstract class do
    public function demov2()
    {
        // logic
    }
    protected function examplev2()
    {
        // logic
    }

    public function check()
    {
        // logic
    }
}

class D extends C
{
    // ??? khong phai bi bat buoc override
}