<?php
// lam viec voi lap trinh huong doi tuong php

class Student
{
    // dinh nghia class
    // thuoc tinh: mieu ta dac diem tinh chat cua doi tuong thuoc vao class (thong thuong se bieu dien bang tinh tu hay danh tu)

    public $name = 'Van Teo'; // khai bao thuoc tinh
    // public: su dung o bat ky dau
    // keyword public: pham vi hoat dong cua thuong tinh
    // $name: ten cua thuoc tinh
    // 'Van Teo': gan gia tri cho thuoc tinh
    protected $phone = '9899900'; // su dung noi bo trong class va nhung lop ke thua
    private $passwordBank = '22121212';// chi su dung noi bo trong class

    public static $email = 'vanteo@gmail.com';

    // khai bao phuong thuc
    // phuong thuc - ham: mo ta hanh dong cua doi tuong (thong thuong se duoc bieu dien thong qua cac dong tu)

    public function learning($subject = 'PHP')
    {
        return "Dang hoc {$subject}";
    }

    public static function sleeping()
    {
        return "23:30";
    }

    protected function loving($myLove = '')
    {
        return "My love is {$myLove}";
    }

    private function shopping()
    {
        return " di mua sam";
    }
}

// tao 1 object
$svCoKhi = new Student;
$svCNTT  = new Student;
$svDienTu = new Student;

// truy cap vao thuoc tinh hay phuong thuc ben ngoai class
// chi ap dung cho thuoc tinh hay phuong thuc co pham vi truy cap la public
$tenSVCNTT = $svCNTT->name; // truy cap vao thuoc tinh(su dung object cua class de truy cap vao).
echo $tenSVCNTT;
echo "<br/>";
echo $svCoKhi->learning('Ve do hoa co khi'); // truy cap vao phuong thuc (goi ham ra su dung)
echo "<br/>";

// khi truy cap vao thuoc tinh hay phuong thuc static khong can dung den object cua class ma su dung luon class de truy cap vao
$mailSVDT = Student::$email; // $svDienTu->email; // sai
echo $mailSVDT;
echo "<br/>";
echo Student::sleeping(); // $svDienTu->sleeping() // sai