<?php

/*
    1. Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение, 
    если данные не переданы то вывести соответствующее сообщение.
*/

function displayType(...$values):void
{
    if (count($values)) {
        foreach ($values as $value) {
            echo "[" . gettype($value) . "] ";
        }
    } else {
        echo "No values.";
    }
    echo PHP_EOL;
}

echo "1. Функция определения типа аргумента", PHP_EOL;
displayType('');           // [string]
displayType();             // No values.
displayType(7, "44");      // [integer] [string]
displayType([4, 5]);       // [array]

/*
    2. Создать функцию которая считает все буквы b в переданной строке, 
    в случае если передается не строка функция должна возвращать false
*/

function countB($str)
{
    if (gettype($str) !== 'string')
        return false;

    $counter = 0;
    $pos = -1;
    while (false !== ($pos = strpos($str, 'b', ++$pos))) {
        $counter++;
    }
    return $counter;
}

function countB_re($str)
{
    if (gettype($str) !== 'string')
        return false;

    return preg_match_all("/b/", $str);
}

echo "2. Функция подсчета вхождений символа 'b'", PHP_EOL;

echo countB("bla-bla"), ", ", countB_re("bla-bla"), PHP_EOL;                  // 2, 2
echo countB("la-la-la"), ", ", countB_re("la-la-la"), PHP_EOL;                // 0, 0
echo countB("babuin-baraBan"), ", ", countB_re("babuin-baraBan"), PHP_EOL;    // 3, 3

/*
    3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины
*/

function array_sum_recursive(array $array)
{
    $sum = array_sum($array);
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += array_sum_recursive($value);
        }
    }
    return $sum;
}

$array = [1, 17, '4', false, [19, 'four', [5, '5']]];
echo "3. Функция подсчета суммы элементов массива", PHP_EOL;
echo array_sum_recursive($array), PHP_EOL;  // 51

/*
    4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать 
    в квадрат большего размера размер возвращать в float
*/

function squares_ratio(float $side1, float $side2):float
{
    // $side1 - сторона "меньшего" квадрата
    // $side2 - сторона "большего" квадрата
    return empty($side1)? 0: ($side2 / $side1) ** 2;
}

echo "4. Функция соотношения квадратов", PHP_EOL;
echo squares_ratio(2, 9), PHP_EOL;   // 20.25
echo squares_ratio(5, 4), PHP_EOL;   // 0.64
