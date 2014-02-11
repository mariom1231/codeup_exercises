<?php

$a = 1;
$c = "test";

echo "\$a outside the function is: $a\n";

function add($a, $b) {

echo "\$a outside the function is: $a\n";
echo "\$c outside the function is: $a\n";
	echo ($a + $b) . "\n";
}

add(10, 11);

echo "\$a outside function is : $a\n";
