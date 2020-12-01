<pre>
<h2>
<?php

$list = [1, 2, 3];
$arr = [
    'red' => 1,
    2 => 2,
    'green' => 3,
];

$arr1 = [
    'red' => 1,
    'blue' => 2,
    'green' => 3,
];

$arr2 = [
    'red' => 11,
    'blue' => 22,
    'green' => 33,
];

var_export(array_merge($arr2, $arr1));

// for
/*
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i] . PHP_EOL;
}
*/

// foreach

// echo "[\n";
// foreach ($arr as $k => $v) {
//     echo "\t'$k' => $v\n";
// }
// echo "]\n";

// while
/*
$end = false;
$current = 1;
while (!$end) {
    if (empty($current)) {
        $end = true;
    } else {
        $current = array_pop($arr);
        var_export($current);
        echo PHP_EOL;
    }
}
*/

// $c = 5;
// while ($c) {
//     echo $c;
//     $c--;
// }

?>
</h2>
</pre>