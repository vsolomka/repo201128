<?php

/*
    1)
    Создать родительский (главный класс)
    Класс должен содержать 2 свойства
    Каждое свойство должно иметь геттеры и сеттеры
*/

class GrandParent
{
    private $property0 = 9;
    private $property1 = 15;

    function getProperty0()
    {
        return $this->property0;
    }
    function getProperty1()
    {
        return $this->property1;
    }

    function setProperty0($value)
    {
        $this->property0 = $value;
    }
    function setProperty1($value)
    {
        $this->property1 = $value;
    }
}

/*
    2)
    Создать 3 наследника родительского класса
    Каждый наследник должен содержать одно свойство
    Каждое свойство должно иметь геттер и сеттер
    Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
    Один наследник не должен быть наследуемым
    Один из наследников должен содержать абстрактную функцию возведения в степень
*/

class ChildAddition extends GrandParent
{
    private $property2 = 0;

    public function getProperty2()
    {
        return $this->property2;
    }
    public function setProperty2($value)
    {
        $this->property2 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty0() + $this->getProperty1() + $this->property2;
    }
}

final class ChildMultiplication extends GrandParent
{
    private $property2 = 1;

    public function getProperty2()
    {
        return $this->property2;
    }
    public function setProperty2($value)
    {
        $this->property2 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty0() * $this->getProperty1() * $this->property2;
    }
}

abstract class ChildPower extends GrandParent
{
    private $property2 = 0;

    abstract public function doOperationAbstract($base, $power);

    public function getProperty2()
    {
        return $this->property2;
    }
    public function setProperty2($value)
    {
        $this->property2 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty1() ** $this->property2;
    }
    
}

/*
    3)
    Создать по 2 наследника от наследников первого уровня
    Каждое свойство должно иметь геттер и сеттер
    Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
    И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством
    В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции
*/

class GrandSonAddition extends ChildAddition
{
    private $property3 = 0;
    public function getProperty3()
    {
        return $this->property2;
    }
    public function setProperty3($value)
    {
        $this->property3 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty0() + $this->property3;
    }
}
class GrandDaughterAddition extends ChildAddition
{
    private $property3 = 0;
    public function getProperty3()
    {
        return $this->property2;
    }
    public function setProperty3($value)
    {
        $this->property3 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty1() + $this->property3;
    }
}

class GrandSonPower extends ChildPower
{
    private $property3 = 1;
    public function getProperty3()
    {
        return $this->property2;
    }
    public function setProperty3($value)
    {
        $this->property3 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty0() ** $this->property3;
    }
    public function doOperationAbstract($base, $power)
    {
        return $base ** $power;
    }
}
class GrandDaughterPower extends ChildPower
{
    private $property3 = 1;
    public function getProperty3()
    {
        return $this->property2;
    }
    public function setProperty3($value)
    {
        $this->property3 = $value;
    }
    public function doOperation()
    {
        return $this->getProperty1() ** $this->property3;
    }
    public function doOperationAbstract($base, $power)
    {
        return $base ** $power;
    }
}


$obj_multiplication = new ChildMultiplication();
echo $obj_multiplication->doOperation(), PHP_EOL;         # 135
$obj_multiplication->setProperty2(3);
echo $obj_multiplication->doOperation(), PHP_EOL;         # 405

$obj_grandson = new GrandSonAddition();
echo $obj_grandson->doOperation(), PHP_EOL;               # 9
$obj_grandson->setProperty0(3);
$obj_grandson->setProperty3(40);
echo $obj_grandson->doOperation(), PHP_EOL;               # 43

$obj_granddaughter = new GrandDaughterPower();
echo $obj_granddaughter->doOperationAbstract(2, 5), PHP_EOL;   # 32

$obj_power = new ChildPower();
echo $obj_power->doOperationAbstract(1, 1);      # Fatal error: Cannot instantiate abstract class ChildPower
