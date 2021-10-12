<?php
// continue oop php

class Person
{
    // tim hieu cac method magic oop
    // cac phuogn thuc nay dc php dinh nghia san - chi goi ra su dung
    // tat ca cac magic methods deu su dung pham vi la public (mac dinh)

    public $name = 'John';

    public function __construct($age = 20, $email = '')
    {
        // ham khoi tao
        // ve dau hieu nhan dien: tat ca cac method magic luon luon co 2 dau gach duoi lien nhau dung truoc ten ham
        // phuong thuc nay se la phuong dc tu dong chay dau tien khi khoi tao doi tuong cho class

        // const magic
        // lay ra ten class dang lam viec : __CLASS__;
        // lay ra ten phuong thuc dang lam viec: __FUNCTION__;
        echo "phuong thuc " . __FUNCTION__ . " da chay -- age : " . $age . ' -- email : ' . $email ;
        echo "<br/>";
    }

    // khi ma mot phuong thuc khong chi ding pham vi hoat dong - thi tu dong mac dinh nhan pham vi la public
    public function __destruct() 
    {
        // phuong thuc se chay cuoi cung trong class
        // ham huy
        echo "<br/>";
        echo "phuong thuc " . __FUNCTION__ . " cua class " . __CLASS__ . " da chay";
    }

    // khi ma mot phuong thuc khong chi ding pham vi hoat dong - thi tu dong mac dinh nhan pham vi la public
    public function getName()
    {
        return $this->name;
    }
}
$p = new Person(25, 'teo@gmail.com'); // __construct se chay ngay
echo $p->getName();