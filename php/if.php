<?php


$a = 5;
$b = 10;
$c = '10';

if ($a < $b) { 
	echo "$a is less than $b\n";
} elseif ($a > $b) {
	echo "$a is greater than $b\n";
}

if ($b > $a) {
	echo "$b is greater than $a\n";
} elseif ($b < $a)
	echo ("$b is less than $a\n");

if ($b >= $c) {
	echo "$b is greater than or equal to $c\n"; 
} elseif($b <= $c) {
	echo "$b is less than or equal to $c\n";
}

if ($b <= $c) {
	echo "$b is less than or equal to $c\n";
} elseif($b >= $c) {
	echo "$b is greater than or equal to $c\n";
}

if ($b == $c) {
	echo "$b is equal to $c\n";
} elseif($b !== $c) {
	echo "$b is not equal to $c\n";
}

if ($b === $c) {
	echo "$b is identical to $c\n";
} elseif ($b !== $c) {
	echo "$b is not identical to $c\n";
}

?>


