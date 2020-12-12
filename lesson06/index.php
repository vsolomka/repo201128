<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 6: Namespaces</title>
</head>
<body>

<?php

require_once("ChildClass.php");

$obj = new ChildClass;
echo $obj->getSum(), PHP_EOL;
echo $obj->getProduct(), PHP_EOL;

?>

</body>
</html>
