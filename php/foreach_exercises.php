<?php

$fruits = array('apple', 'banana', 'orange', 'lime');

foreach ($fruits as $fruit) {
	echo ("\$fruits has an element with a value of {$fruit}\n");
}

?>

<?php 
$data = array('apple', 'banana', 5,  7 * 6, 88.0);

for each ($data as $item) {
	if (is_numeric($item)) {
		echo "{$item} is a number\n";
	}	elseif (is_string($item)) {
		echo "{$item} is a string\n";
	} else {
		echo "{$item} is not a number or string\n";
	}
}

?>