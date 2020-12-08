<pre>
<?php
# Classes
/*
class A
{
    public $str = "свойство";
    protected $int = 10;
    private $private = "hidden data";

    public function getPrivate()
    {
        return $this->private;
    }

    public function setPrivate($value)
    {
        $this->private = $value;
    }
}

class C extends A
{
    protected $private = 20;
    public function getInt()
    {
        return $this->int;
    }

    public function getPrivate()
    {
        return $this->private;
    }

}

class D extends C
{

}

$objA = new A;
$objB = new A;

var_export($objA);
var_export($objB);
echo PHP_EOL;

var_export(get_class_methods("A"));
echo PHP_EOL;


echo $objA->str, PHP_EOL;

echo $objA->getPrivate(), PHP_EOL;
echo $objA->setPrivate("секрет");
echo $objA->getPrivate(), PHP_EOL;
# echo $objA->int, PHP_EOL;

echo $objB->getPrivate(), PHP_EOL;

$objC = new C;
echo '$objC->int: ';
var_export($objC->getInt());
var_export($objC->getPrivate());
echo PHP_EOL;

$objD = new D;
var_export($objD->getPrivate());
*/

class ParentClass
{
    private $num1 = 19;
    private $num2 = 10;
    public function getNum1()
    {
        return $this->num1;
    }
    public function getNum2()
    {
        return $this->num2;
    }
    public function setNum1($value)
    {
        return $this->num1 = $value;
    }
    public function setNum2($value)
    {
        return $this->num2 = $value;
    }
}

class Child extends ParentClass
{
    public function getSum()
    {
        return $this->getNum1() + $this->getNum2();
    }
    public function getProduct()
    {
        return $this->getNum1() * $this->getNum2();
    }

}

$obj = new Child;
echo $obj->getSum(), PHP_EOL;
echo $obj->getProduct(), PHP_EOL;

$obj->setNum1(5);
$obj->setNum2(25);
echo $obj->getSum(), PHP_EOL;
echo $obj->getProduct(), PHP_EOL;
