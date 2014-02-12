<?php 

function add($num1 = 0, $num2 = 0) {
   if (is_numeric($num1) && is_numeric($num2)) {
	return $num1 + $num2 . PHP_EOL;
	} else {
		echo ' ERROR! Both args should be numbers' . PHP_EOL;
	}
}


$result = add(3.14, 3) + 9;
	echo $result . PHP_EOL;


// function trim_with_new_line($item, $newline = TRUE) {
// 	if ($newline === TRUE) {
// 		echo trim($item) . PHP_EOL;
// 	} else {
// 		echo trim($item);
// 	}
// }

// trim_with_new_line('    Jason    ');