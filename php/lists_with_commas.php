<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $sort = FALSE) {
  // Your solution goes here!
	$array = explode(', ', $string);
	sort($exploded);
	$last_item = array_pop($array);

	$result = implode(', ', $array) . ", and " . $last_item;
	return $result;

}



// List of famous peeps

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
	echo $famous_fake_physicists;

// $famous_fake_physicists = implode(', and [final item])', $physicists_string);
// 	echo $famous_fake_physicists;
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";

	echo "Some of the most famous fictional theoretical physicists are $famous_fake_physicists. " . PHP_EOL;

	
?>