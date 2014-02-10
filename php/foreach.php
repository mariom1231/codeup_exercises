<?php

$things = array('Sgt. Pepper', "11", null, array(1, 2, 3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $thing) {
	if (is_array($thing)) {
		echo "{$thing} is a array\n";
	} elseif (is_bool($thing)) {
		echo "{$thing} is a bool\n";
	} elseif (is_float($thing)) {
		echo "{$thing} is a float\n";
	} elseif (is_int($thing)) {
		echo "{$thing} is an int\n";
	}
}
