<?php


$a = 5;
$b = 10;
$c = '10';

if ($a < $b) { 
	echo "$a is less than $b\n";
}

if($b > $a) {
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	echo "$b is greater than or equal to $c\n"; 
}

if ($b <= $c) {
	echo "$c is less than or equal to $b\n"; 
}

if ($b == $c) {
	echo "$b is equal to $c\n";
}

if ($b === $c) {
	echo "$b is identical to $c\n";
}

if ($b != $c) {
	echo "$b is not equal to $c\n";
}

if ($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>