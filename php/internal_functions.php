<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Both NULL and " " are considered EMPTY
// array (1,2,3) is not considered EMPTY

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// function checkvalue($nothing, $something, $array) {
		//echo " ";
// }

function setOrEmpty($nothing, $something) {
	if (empty($var)) {
	    echo "$var is EMPTY";
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
	} else {
		echo "$var is not EMPTY";
	}
// TEST: If var $something is set, display '$something is SET'
	if (isset($var)) {
		echo "$var is SET";
	} else {
		echo "$var is not SET";
	}

}	

// call the function
setOrEmpty($nothing);

setOrEmpty($something);


// Correct: if isset && not empty, 
// return __ 
// else 
// return __







// Serialize the array $array, and output the results

// $serial = $serialize($array);
//		echo  "$serialize";
// Correct ^^: var_dump($serial);

// Unserialize the array $array, and output the results

// $unserial = $unserialize($serialize);
// 		echo "unserialized";
// Correct ^^: var_dump($unserial);

