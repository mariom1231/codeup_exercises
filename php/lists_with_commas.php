<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
  // Your solution goes here!
	$array = explode(', ', $string);
	$last_item = array_pop($array);

	$newarray = implode(', ', $array) . ", and " . $last_item;
	return $newarray;

}



// List of famous peeps

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
//	echo $famous_fake_physicists;

// $famous_fake_physicists = implode(', and [final item])', $physicists_string);
// 	echo $famous_fake_physicists;
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

	echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists. " . PHP_EOL;

	
?>