<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Both NULL and " " are considered EMPTY
// array (1,2,3) is not considered EMPTY

// TEST: If var $nothing is set, display '$nothing is SET'

// function checkvalue($nothing, $something, $array) {
		//echo;
// }
if (isset($nothing)) {
	    echo "$nothing is SET";
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
elseif (empty($nothing)) {
		echo "$nothing is EMPTY";
}
// TEST: If var $something is set, display '$something is SET'
if (isset($something)) {
		echo "$something is SET";
}








// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results