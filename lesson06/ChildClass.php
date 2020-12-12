<?php
require("ParentClass.php");

class ChildClass extends ParentClass
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