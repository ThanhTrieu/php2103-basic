<?php
final class A 
{
    public function test()
    {
        return 'abc';
    }
}

/*
// sai : vi khong the ke thua final class A
class B extends A
{

}
$b = new B;
echo $b->test();
*/

// khong cho override lai method
class Animals
{
    final public function eating()
    {
        return 'abc';
    }
}

class Cats extends Animals
{
    /*
    // sai : khong the override method final
    public function eating()
    {
        return 'def';
    }
    */

    public function sleeping()
    {
        $eat = $this->eating();
        return "xyz - {$eat}";
    }
}
$cat = new Cats;
echo $cat->sleeping();