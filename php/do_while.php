<?php
// Exercise 1: Create a do-while loop that will count by 2's starting with 0
// and ending at 100. Follow each number with a newline.

// $a = 0;

// do {
// 	echo "$a\n";
// 	$a = $a + 2;
	
	
// } while ($a <= 100);

// Exercise 2: Alter your loop to count backwards by 5's from 100 to -10.


// $a = 100;

// do {
// 	echo "$a\n";
// 	$a = $a - 5;

// } while ($a >= -10);


// Exercise 3: Create a do-while loop that starts at 2, and returns the result
// $a * $a on each line while $a is less than 1,000,000. Output should equal:

$a = 2;

do {
	echo "$a\n";
	$a = $a * $a;

} while ($a < 1000000);

