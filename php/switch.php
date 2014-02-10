<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = rand(1, 7);

switch(gettype($day_of_week)) {
    // Output Monday
    case 'Monday':
    	echo 'The day is Monday';
    	break;
        // Output Tuesday
    case 'Tuesday':
    	echo 'The day is Tuesday';
    	break;
        // Output Wednesday
    case 'Wednesday':
    	echo 'The day is Wednesday';
    	break;
    	// Output Thursday
    case 'Thursday':
    	echo 'The day is Thursday';
    	break;
    	// Output Friday
    case 'Friday':
    	echo 'The day is Friday';
    	break;
    	// Output Saturday
    case 'Saturday':
    	echo 'The day is Saturday';
    	break;
    	// Output Sunday
    case 'Sunday':
    	echo 'The day is Sunday';
    	break;	

}