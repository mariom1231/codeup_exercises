<?php
$rand = mt_rand(1,100);

// Prompt user to guess a number.
fwrite(STDOUT, 'Guess a number between 1 and 100?');

// Get the input from the user.
$number = fgets(STDIN);

// Output the user's response.
// If lower than correct response, ask user to guess higher.
if ($number < $rand) {  
	fwrite(STDOUT, 'Guess higher');
}
// If lower than correct response, ask user to guess lower.
if ($number > $rand) {
	fwrite(STDOUT, 'Guess lower');
}
// If correct, say, Great job!
if ($number == $rand) {
	fwrite(STDOUT, "Great job!");
}
exit(0);
