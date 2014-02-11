<?php

function add($num1, $num2) {
   if (is_numeric($num1) && is_numeric($num2)) {
		echo $num1 + $num2 . PHP_EOL;
	} else {
		echo "ERROR! Both $num1 and $num2 should be numbers" . PHP_EOL;
	}
}

function subtract($num1, $num2) {
   if (is_numeric($num1) && is_numeric($num2)) {
		echo $num1 - $num2 . PHP_EOL;
	} else {
		echo "ERROR! Both args should be numbers" . PHP_EOL;
	}
}

function multiply($num1, $num2) {
   if (is_numeric($num1) && is_numeric($num2)) {
		echo $num1 * $num2 . PHP_EOL;
	} else {
		echo "ERROR! Both args should be numbers" . PHP_EOL;
	}
}

function divide($num1, $num2) {
   if (is_numeric($num1) && is_numeric($num2)) {
		if ($num2 == 0) {
		echo "ERROR! You cannot divide by 0" . PHP_EOL;
}		else echo $num1 / $num2 . PHP_EOL;
	} else {
		echo "ERROR! Both args should be numbers" . PHP_EOL;
	}
}

function modulus($num1, $num2) {
   if (is_numeric($num1) && is_numeric($num2)) {
		if ($num2 == 0) {
		echo "ERROR! You cannot divide by 0" . PHP_EOL;
}		else echo $num1 % $num2 . PHP_EOL;
	} else {
		echo "ERROR! Both args should be numbers" . PHP_EOL;
	}
}

$num1 = 'cat';
$num2 = 0;

add($num1, $num2);
subtract($num1, $num2);
multiply($num1, $num2);
divide($num1, $num2);
modulus($num1, $num2);

?>

	