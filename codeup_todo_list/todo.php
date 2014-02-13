<?php

// Create empty array to hold list of todo items
$items = array();

// // List array items formatted for CLI
// function list_items($list)
// {
//     // Return string of list items separated by newlines.
//     // Should be listed [KEY] Value like this:
//     // [1] TODO item 1
//     // [2] TODO item 2 - blah
//     // DO NOT USE ECHO, USE RETURN
// }
    
    function list_items($list) {
    $string = '';
    
    foreach ($list as $key => $value) {
        $items = $key + 1;
        $string .= '[' . ($key + 1) . '] ' . $items . PHP_EOL;
        
        return $string;
    }
}


// // Get STDIN, strip whitespace and newlines, 
// // and convert to uppercase if $upper is true
// function get_input($upper = FALSE) 
// {
//     // Return filtered STDIN input
// }

function get_input($upper = FALSE) {
    $input = (trim(fgets(STDIN)));
    return $upper ? strtoupper($input) : $input;
}

// The loop!
do {
        // Echo the list produced by the function
function list_items($list) {

    $result = '';

    foreach ($list as $key => $value) {
        
        $result .= '[' . ($key + 1) . ']' . $value . PHP_EOL; 
    }
    
    return $result;

}

    echo list_items($items) . PHP_EOL;
    

    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort, or (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);    

    // Check for actionable input
    if ($input == 'N') {
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
    } elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        
        // Get array key
        $key = get_input();

        // Remove from array
        unset($items[$key - 1]);
        $items = array($items);
    } elseif ($input == 'S') {
        // How do you want to sort?
        echo 'How would you like to sort: (A)-Z, or (Z)-A? ';
        $sortBy = get_input(TRUE);
        if ($sortBy) == 'A') {
            $sort($items);
        } elseif ($sortBy == 'Z') (
            rsort($items);

    }

}

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
