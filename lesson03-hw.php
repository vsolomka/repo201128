<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

# 1. Посчитать длину массива

# built-in function
echo "Длина массива: " . count($arr) . PHP_EOL;

# foreach
$counter = 0;
foreach ($arr as $v)
    $counter++;
echo "Длина массива: $counter" . PHP_EOL;

# 2. Переместить первые 4 элемента массива в конец массива
$arr_modified = array_merge(array_slice($arr, 4), array_slice($arr, 0, 4));
var_export($arr_modified);
echo PHP_EOL;

# 3. Получить сумму 4,5,6 элемента
$sum = 0;
for ($i = 3; $i < 6; $i++)
    $sum += $arr[$i];
echo "Сумма: " . $sum . PHP_EOL;
echo "Сумма: " . ($arr[3] + $arr[4] + $arr[5]) . PHP_EOL;


$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

echo "Исходные массивы: ", PHP_EOL;
echo var_export($firstArr, true), PHP_EOL;
echo var_export($secondArr, true), PHP_EOL;

# 4. Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором
echo "Ключи отсутствующие в 1-м и присутствующие во 2-м: ", PHP_EOL;
echo var_export(array_diff_key($secondArr, $firstArr), true), PHP_EOL;

echo "Значения отсутствующие в 1-м и присутствующие во 2-м: ", PHP_EOL;
echo var_export(array_diff_assoc($secondArr, $firstArr), true), PHP_EOL;

# 5. Найти все элементы которые присутствую в первом и отсутствуют во втором
echo "Ключи отсутствующие в 2-м и присутствующие во 1-м: ", PHP_EOL;
echo var_export(array_diff_key($firstArr, $secondArr), true), PHP_EOL;

echo "Значения отсутствующие в 2-м и присутствующие во 1-м: ", PHP_EOL;
echo var_export(array_diff_assoc($firstArr, $secondArr), true), PHP_EOL;

# 6. Найти все элементы значения которых совпадают
echo "Совпадающие элементы: ", PHP_EOL;
echo var_export(array_intersect_assoc($firstArr, $secondArr), true), PHP_EOL;

# 7. Найти все элементы значения которых отличается
$keys = array_keys(array_intersect_key($firstArr, $secondArr));
foreach ($keys as $k) {
    if ($firstArr[$k] !== $secondArr[$k])
        echo "Для ключа [$k] есть разные значения: {$firstArr[$k]} и {$secondArr[$k]}", PHP_EOL;
}


$thirdArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
     ],  
];

# 8. Получить все вторые элементы вложенных массивов
/*
    понятие "второй" не может быть строго определено для ассоциативного
    поєтому считаем "вторым" тот, который был объявлен вторым
*/
echo "Вторые элементы: ", PHP_EOL;
foreach ($thirdArr as $v) {
    if (is_array($v)) {
        echo array_values($v)[1], PHP_EOL;
    }
}

# 9. Получить общее количество элементов в массиве
echo "Всего элементов (включая вложенные массивы): ", count($thirdArr, COUNT_RECURSIVE), PHP_EOL;

# 10. Получить сумму всех значений в массиве
$scalars = 0;
$total = 0;
foreach ($thirdArr as $v_level1) {
    if (is_array($v_level1)) {
        foreach ($v_level1 as $v_level2) {
            $scalars++;
            $total += $v_level2;
        }
    } else {
        $scalars++;
        $total += $v_level1;
    }
}
echo "Сумма элементов: $total", PHP_EOL;
echo "Количество элементов имеющих скалярное значение: $scalars", PHP_EOL;
