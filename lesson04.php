<h1>
<?php

$arr = [
    "1" => 10,
    "2" => [
        "1" => 20,
        "2" => 30,
        "3" => 10,
        "4" => [1, 2]
    ],
    "3" => 20,
];

//echo 'arrSum($arr): ', arrSum($arr), "<br/>";
//echo 'arrSumRecusive($arr): ', arrSumRecursive($arr), "<br/>";

function arrSum(array $arr):int
{
    return array_sum($arr);
}

function arrSumRecursive(array $arr):int
{
    $sum = arrSum($arr);
    foreach ($arr as $value) {
        if (is_array($value)) {
            $sum += arrSumRecursive($value);
        }
    }
    return $sum;
}

// -----------------------------------------

function test($a = 10)
{
    // $a = 10;
    return $a;
}
function test1($b)
{
    echo test($b);
}

test1(20);

?>
</h1>