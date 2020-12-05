<?php
# все "вторые" 
$arr = [
    "1" => [
        "k1" => 111,
        "k2" => 222,
    ],
    "2" => 2,
    "3" => [
        "1" => 4,
        "2" => 5,
        "3" => [
            "a" => 11,
            "b" => 22,
            "c" => 33,
        ]
    ],
];

myCounter($arr);

function myCounter (array $arr):void
{
    $counter = 1;
    foreach ($arr as $v) {
        if (is_array($v)) {
            myCounter($v);
        } else {
            if ($counter == 2) {
                echo var_export($v, true), "<br/>";
            }
        }
        $counter++;
    }
}

