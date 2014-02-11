<?php

function add($num1, $num2) {
    echo $num1 + $num2 . PHP_EOL;
}

function subtract($num1, $num2) {
    echo $num1 - $num2 . PHP_EOL;
}

function multiply($num1, $num2) {
    echo $num1 - $num2 . PHP_EOL;
}

function divide($num1, $num2) {
    echo $num1 / $num2 . PHP_EOL;
}

$num1 = 30;
$num2 = 12;

add($num1, $num2);
subtract($num1, $num2);
multiply($num1, $num2);
divide($num1, $num2);
?>