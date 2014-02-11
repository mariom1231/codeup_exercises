<?php

is_numeric(11);

function add($a, $b = 0) {
	
	var_dump($b);
	echo $a + $b . PHP_EOL;

}

add(4);