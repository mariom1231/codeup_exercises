<?php

// Create empty array to hold list of todo items
$items = array();

// List array items formatted for CLI
// Return string of list items separated by newlines.

function list_items($list) {
    $string = '';
    
    foreach ($list as $key => $value) {
        $key++;
        $string .=  "[{$key}] {$items} . PHP_EOL";
    }    
    return $string;
}

// // Get STDIN, strip whitespace and newlines, 
// // and convert to uppercase if $upper is true

function get_input($upper = FALSE) {
    $input = (trim(fgets(STDIN)));
    return $upper ? strtoupper($input) : $input;
}
// By using the array function explode() and using the newline character as a
// delimiter, we can break the contents by line into array elements.
function read_file($filename) {
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    fclose($handle);

// Output $contents_array
    return $contents_array;
}

function write_file($array) {
    $handle = fopen($filename, 'w');
    foreach ($array as $item) {
    fwrite($handle, PHP_EOL . $item);
    }
    
    fclose($handle);
}

function yesOrNo() {
    echo 'Are you sure? (Y)es or (N)o? ';
    $response = get_input(TRUE);
    switch ($response) {
        case 'Y':
        return TRUE;
        break;

        default:
        echo 'Last action cancelled. ';
        break;
    } 
}

// The loop!
do {
        // Echo the list produced by the function

    echo list_items($items) . PHP_EOL;
    

    // Show the menu options
    echo '(N)ew item, (O)pen item, (R)emove item, (S)ave, (SO)rt, or (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);

    switch ($input) {
        
        case 'N':

        echo 'Enter item: ';

        $addTo = get_input();
    
        echo 'Would you like to add this item to the (B)eginning or the (E)nd of the list? ';

        $beg_or_end = get_input();
        
            if ($beg_or_end == 'B') {
            array_unshift($items, $addTo);
            
            } else {
            array_push($items, $addTo);
        }        
        break;

        
        case 'O':
        
        echo 'Enter the filepath and name. ';
        $filename = get_input();
        read_file($filename);

        break;

        case 'R':
        
        echo 'Enter item number to remove: ';
        
        // Get array key
        $key = get_input();
        $key--;
        // Remove from array
        unset($items[$key]);
        $items = array($items);

        echo 'Would you like to remove the (F)irst item or the (L)ast item from the list? ';

        if($input == 'F') {
            array_shift($items, 'remove first item ');
            
        } else {
            array_pop($items, 'remove last item ');
        }
        break;
// When (S)ave is chosen, the user should be able to enter the path to a file
// to have it save. Use fwrite() with the mode that starts at the beginning of
// a file and removes all the file contents, or creates a new one if it does
// not exist. After save, alert the user the save was successful and redisplay
// the list and main menu.
        case 'S':

        echo 'Enter the filepath to save to. ';
        $filename = get_input();
        
        if(existing_file($filename)); {
            echo 'This file already exists. Would you like to overwrite it? ';
            $response = yesOrNo();

            if($response) {
                save_file($items, $filename);

            } else {
            save_file($items, $filename);
        
        echo "Save was successful.";
        }
        break;

        case 'SO':
        
        echo 'How would you like to sort: (A)-Z, or (Z)-A? ';
        $sortBy = get_input();
        if ($sortBy == 'A') {
            $sort($items);
        } else {
            rsort($items);
        }
        break;

    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);