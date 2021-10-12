<?php
// tiep ve oop php

class Cats 
{
    public $name = 'Tom';
    public $age = 3;
    private $weight = 4;
    protected static $color = 'black';
    public $gender = 'Male';
    //define(); // trong class khong tu khoa define
    const SOUND = 'Meo Meo';

    public function getName() 
    {
        // $this === Cats
        // dung tu khoa self de truy cap vao const trong class - khong dung $this
        return $this->name . ' ---- ' . self::SOUND;
    }

    public function getAge() 
    {
        $nameCat = $this->getName();
        $w = $this->weight; // noi tai trong class nen van dc phep truy cap vao private
        return $this->age . ' --- '. $nameCat . ' ---- ' . $w;
    }

    public function getColor() 
    {
        // self === Cats : dung cho static trong class
        return self::$color; //Cats::$color; //$this->color;
    }

    public static function getGender() 
    {
        // khong su dung duoc $this trong nay mot cach mac dinh
        // phai khoi tao doi tuong truy cap vao
        return (new Cats)->gender; //self::$gender; //$this->gender;
    }

    public static function getInformation() 
    {
        //return self::getGender(); //$this->getGender(); // sai
        return (new Cats)->getName(); // $this->getName(); // sai
    }
}

$cat = new cats;
echo $cat->getAge();
echo "<br/>";
echo $cat->getColor();
// ben ngoai class khong keyword "self" de truy cap vao TT - PT static
echo "<br/>";
echo $cat->getGender();
echo "<br/>";
echo Cats::getInformation();