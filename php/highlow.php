<?php

if ($argc == 3) {
	//Echo them out directly.
	echo "arg1 is {$argv[1]} and arg2 is {$argv[2]}\n";
}	
$guesses = 0;


// Prompt user to guess a number.
fwrite(STDOUT, "Guess a number between 1 and 100?\n");

// Get the input from the user.
$number = fgets(STDIN);

// Output the user's response.
// If lower than correct response, ask user to guess higher.
while ($number != $rand) {

	if ($number < $rand) {  
		fwrite(STDOUT, "Guess higher\n");
	}
// If lower than correct response, ask user to guess lower.
	elseif ($number > $rand) {
		fwrite(STDOUT, "Guess lower\n");
	}
// If correct, say, Great job!
	else {
		fwrite(STDOUT, "Great job! You are awesome!\n");
	}

	// Prompt user to guess a number.
	fwrite(STDOUT, "Wrong. Try Again.\n");

	// Get the input from the user.
	$number = fgets(STDIN);

	$guesses++;
}

	echo "It took you $guesses tries to get the correct answer.\n";

exit(0);

// If there are 2 arguments and filename.




?>