<?php

// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael']

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