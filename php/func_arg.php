<?php 
$student = $array(
'first_name' => 'Izzy', 'last_name' => 'R');

$student['first_name'];

if (array_key_exists('middle_name', $student)); {
	echo $student['middle_name'];
}


// Send email

// function add($num1, $num2 = 0) {
//    if (is_numeric($num1) && is_numeric($num2)) {
// 	return $num1 + $num2 . PHP_EOL;
// 	} else {
// 		echo " ERROR! Both args should be numbers." . PHP_EOL;
// 	}
// 	echo "Done!";
// }


// $result = add(TRUE, 3);
	
// 	echo $result . PHP_EOL;


// function trim_with_new_line($item, $newline = TRUE) {
// 	if ($newline === TRUE) {
// 		echo trim($item) . PHP_EOL;
// 	} else {
// 		echo trim($item);
// 	}
// }

// trim_with_new_line('    Jason    ');