<?php

function validate($num1, $num2) {
	if (!is_numeric($num1) || !is_numeric($num2)) {
		// echo "ERROR! Both $num1 and $num2 should be numbers." . PHP_EOL;
		// var_dump($num1);
		// var_dump($num2);
		return FALSE;

	}	else {
		return TRUE;
	}
}

function add($num1, $num2) {
	if (validate($num1, $num2)) {
		return $num1 + $num2 . PHP_EOL;
	}
}

function subtract($num1, $num2) {
   if (validate($num1, $num2)) {
		return $num1 - $num2 . PHP_EOL;
	}
}
function multiply($num1, $num2) {
   if (validate($num1, $num2)) {
		return $num1 * $num2 . PHP_EOL;
	}
}

function divide($num1, $num2) {
   if (validate($num1, $num2)) {
		if ($num2 !== 0) {
			return $num1 / $num2 . PHP_EOL;
		} else {
        	return FALSE;
    	}
    }    
}

function modulus($num1, $num2) {
	if (validate($num1, $num2)) {
		if ($num2 != 0) {
			return $num1 % $num2 . PHP_EOL;
		} else {
        	return false;
    	}
    }    
}

$num1 = 30;
$num2 = 12;

echo add($num1, $num2);
echo subtract($num1, $num2);
echo multiply($num1, $num2);
echo divide($num1, $num2);
echo modulus($num1, $num2);
