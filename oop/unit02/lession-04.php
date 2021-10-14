<?php

//interface
interface A
{
    // khong duoc phep dinh nghia thuoc tinh trong nay
    // duoc phep dinh nghia cac phuong thuc - nhung phai la cac phuong thuc rong va bat buoc de o pham vi truy cap la public
    public function demo(); // phuong thuc rong
    public function test(); 
}

// interface dc phep ke thua interface khac
// van dung tu khoa: extends
interface B extends A
{
    public function example();
}

// class ke thua interface - su dung tu khoa implements
class C implements B
{
    // khi mot class implements 1 interface thi class do phai override lai toan bo cac phuong thuc cua interface da co
    public function demo()
    {
        // xu ly logic
    }
    public function test()
    {
        // xu ly logic
    }
    public function example()
    {
        // xu ly logic
    }
}

// interface khong the khoi tao doi tuong
// $a = new A; // sai