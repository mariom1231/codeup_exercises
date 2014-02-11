<?php 

function add($num1, $num2 = 0) {
   echo ($num1 + $num2) . "\n";
}


add (array(), 'Jason');

// function trim_with_new_line($item, $newline = TRUE) {
// 	if ($newline === TRUE) {
// 		echo trim($item) . PHP_EOL;
// 	} else {
// 		echo trim($item);
// 	}
// }

// trim_with_new_line('    Jason    ');