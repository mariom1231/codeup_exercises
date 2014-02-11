<?php 

function add($num1, $num2 = 0) {
   if (is_numeric($num1) && is_numeric($num2)) {
	echo $num1 + $num2 . PHP_EOL;
	} else {
		echo ' Both args should be numbers' . PHP_EOL;
	}
}


add(3.14, TRUE);

// function trim_with_new_line($item, $newline = TRUE) {
// 	if ($newline === TRUE) {
// 		echo trim($item) . PHP_EOL;
// 	} else {
// 		echo trim($item);
// 	}
// }

// trim_with_new_line('    Jason    ');