<?php
// continue oop php .

class Animals
{
    public $name = 'Jerry';
    public $age = 2;

    public function getName()
    {
        return $this->name;
    }

    protected function getAge()
    {
        return $this->age;
    }
}

// ke thua trong php
class Dogs extends Animals
{
    // trong php chi co khai niem don ke thua - khong co khai niem da ke thua
    // 1 class chi ke thua 1 class khac , khong the ke thua cung 1 luc nhieu class khac nhau

    public function getAgeDog()
    {
        return $this->getAge(); // duoc phep su dung protected o class ke thua
    }

    // tinh da hinh - override
    public function getName()
    {
        return 'Jex';
    }

    public function getNameDog()
    {
        // lam the nao goi dung phuong thuc cua class Animals
        // van cho phep class Dogs override lai phuong thuc cua class Animals
        // $this === Dogs chu ko phai $this !== Animals
        // tu khoa parent : goi phuong thuc tu class cha cho ke thua
        return parent::getName(); // goi vao phuong thuc cua class Animals hay class Dogs
    }

}
$dog = new Dogs;
echo $dog->getName(); // Jex
echo "<br/>";
echo $dog->getAgeDog();
echo "<br/>";
echo $dog->getNameDog(); // Jerry