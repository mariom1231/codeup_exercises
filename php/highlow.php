<?php
// Game picks a random number between 1 and 100.
$rand = mt_rand(1, 100);

// Prompt user to guess a number.
fwrite(STDOUT, "Guess a number between 1 and 100?\n");

// Get the input from the user.
$number = fgets(STDIN);
$count = 1;
// Output the user's response.
// If lower than correct response, ask user to guess higher.
while ($number != $rand) {

	if ($number < $rand)
	 {  
	
		fwrite(STDOUT, "Guess HIGHER\n");
		$number = fgets(STDIN);
	}
// If lower than correct response, ask user to guess lower.
	elseif ($number > $rand) {
		fwrite(STDOUT, "Guess LOWER\n");
		$number = fgets(STDIN);
	}	$count++;
}
// If correct, say, Great job!
fwrite(STDOUT, "Great job! You are awesome!!\n");

fwrite(STDOUT, "It took you $count guesses to get the correct number.\n");

exit(0);

?>