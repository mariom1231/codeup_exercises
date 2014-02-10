<?php

$data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
foreach ($data as $datum) {
	if (is_numeric($datum)) {
		echo "{$datum} is a number\n";
	} elseif (is_string($datum)) {
		echo "{datum} is a string\n";
	}
}
