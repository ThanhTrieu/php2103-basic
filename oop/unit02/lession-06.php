<?php

trait Dogs
{
    public static $name = 'Jex';
    //protected static $age = 2;
    //private static $color = 'white';

    public function getName()
    {
        return self::$name;
    }

    /*
    protected function getAge()
    {
        return self::$age;
    }
    */

    /*
    private function getColor()
    {
        return self::$color;
    }
    */
}

trait Cats
{
    public static $names = 'Tom';
    //protected static $ages = 1;
    //private static $colors = 'black';

    public function getName()
    {
        return self::$names;
    }

    /*
    protected function getAge()
    {
        return self::$ages;
    }
    */

    /*
    private function getColor()
    {
        return self::$colors;
    }
    */
}

class Pets
{
    use Dogs, Cats {
        Dogs::getName insteadof Cats;
        // su dung phuong thuc getName cua Dogs thanh cua Cats
        //Cats::getAge insteadof Dogs;
        //Cats::getColor insteadof Dogs;
    } // su dung trait

    public function getNameOfPet()
    {
        return Cats::getName();
    }
    /*
    public function getAgeOfPet()
    {
        return Dogs::getAge();
    }
    */
}

$pet = new Pets;
echo $pet->getNameOfPet();
//echo $pet->name;

// $dog = new Dogs; // sai vi Dogs la trait
// echo $dog->name;