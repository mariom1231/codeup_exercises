<?php


$a = 10;
$b = 40;
$c = '40';

if ($a < $b) { 
	echo "$a is less than $b\n";
} else {
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	echo "$b is greater than or equal to $c\n"; 
} else {
	echo "$c is less than or equal to $b\n"; 
}

if ($b == $c) {
	echo "$b is equal to $c\n";
} elseif ($b === $c) {
	echo "$b is identical to $c\n";
} elseif ($b != $c) {
	echo "$b is not equal to $c\n";
} else {
	echo "$b is not identical to $c\n";
}

?>