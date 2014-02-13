<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found.

function searchArrays($value, $array) {

	$result = array_search($value, $array);

	if ($result === FALSE) {
		return FALSE;
	}
	return TRUE;
}

// Search for Tina and Bob in $names. Tina = yes, Bob = no!



// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// Use foreach to create function.
// foreach $needles as $needles
// 		return
function count_matches($needles, $haystack){
	$number_of_matches = 0;
}
	foreach ($needles as $needle) {
		result = array_search($needle, $haystack);
		if(is_numeric($numeric($result)) {
			$number_of_matches++;
		}
	}
	return $number_of_matches;

	$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

	echo count_matches($compare, $names);
