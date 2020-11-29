<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание, Урок №2</title>
    <style>
    body {
        font: normal 1.5em/1.5em Sans-serif;
    }
    .overline {
        border-top: 2px solid black;
    }
    </style>
</head>
<body>
<?php

define('NL', '<br />' . PHP_EOL);

?>

<h2>Действия с числами</h2>
<?php
// Получить остаток деления 7 на 3
echo "Остаток деления 7 на 3 = ", 7 % 3, NL;

// Получить целую часть сложения 7 и 7,15
echo "Целая часть сложения 7 и 7.15 = ", intval(7 + 7.15), NL;

// Получить корень из 25
echo '&#8730;<span class="overline">25</span> = ', sqrt(25), NL;
echo '25<sup>&frac12;</sup> = ', pow(25, .5), NL;

?>

<h2>Действия со строками</h2>
<?php

$string = 'Десять негритят пошли купаться в море';
echo "Фраза: <strong>$string</strong>", NL;

// Получить 4-е слово из фразы - Десять негритят пошли купаться в море
echo '4-е слово из фразы: ', mb_split(' ', $string)[3], NL;

// Получить 17-й символ из фразы - Десять негритят пошли купаться в море
echo '17-й символ: ', mb_substr($string, 16, 1), NL;

// Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
echo 'Заглавные буквы в начале слов: ', mb_convert_case('Десять негритят пошли купаться в море',  MB_CASE_TITLE), NL;

// Посчитать длину строки - Десять негритят пошли купаться в море
echo 'Длина строки: ', strlen('Десять негритят пошли купаться в море'), NL;

?>

<h2>Действия с логическими значениями</h2>
<?php

// Правильно ли утверждение true равно 1
echo 'true == 1: ', var_export(true == 1, true), NL;

// Правильно ли утверждение false тождественно 0
echo 'false === 0: ', var_export(false === 0, true), NL;

// Какая строка длиннее three - три
$str1 = 'three';
$str2 = 'три';
$str1_length = mb_strlen($str1);
$str2_length = mb_strlen($str2);

echo "<p>", PHP_EOL;
if ($str1_length > $str2_length) {
    echo "Строка \"$str1\" длиннее строки \"$str2\".";
} else if ($str1_length < $str2_length) {
    echo "Строка \"$str2\" длиннее строки \"$str1\".";
} else {
    echo "Строки \"$str1\" и \"$str2\" равны (по длине).";
}
echo '</p>', PHP_EOL;

// Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$num1 = 125 * 13 + 7;
$num2 = 223 + 28 * 2;

echo "Числа: $num1 и $num2", NL;
echo ($num1 == $num2)? "Числа равны.": (($num1 > $num2)? 1: 2) . "-е число больше";

?>
</body>
</html>
