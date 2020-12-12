<?php
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