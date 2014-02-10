<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

switch($day_of_week) {
    // Output Monday
    case 1:
    	echo '$day_of_week is Monday';
    	break;
        // Output Tuesday
    case 2:
    	echo '$day_of_week is Tuesday';
    	break;
        // Output Wednesday
    case 3:
    	echo '$day_of_week is Wednesday';
    	break;
    	// Output Thursday
    case 4:
    	echo '$day_of_week is Thursday';
    	break;
    	// Output Friday
    case 5:
    	echo '$day_of_week is Friday';
    	break;
    	// Output Saturday
    case 6:
    	echo '$day_of_week is Saturday';
    	break;
    	// Output Sunday
    case 7:
    	echo '$day_of_week is Sunday';
    	break;	
    default:
    	echo 'Not a day of the week';
    	break;
}