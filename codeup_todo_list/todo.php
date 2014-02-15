<?php

// Create empty array to hold list of todo items
$items = array();

// List array items formatted for CLI
// Return string of list items separated by newlines.

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

// The loop!
do {
        // Echo the list produced by the function

    echo list_items($items) . PHP_EOL;
    

    // Show the menu options
    echo '(O)pen file, (N)ew item, (R)emove item, (S)ave, (SO)rt, or (Q)uit : ';

    // Get the input from user
    $input = get_input(TRUE);

    if ($input == 'O') {
        echo 'Enter the filename. ';
        $filename = get_input();
        read_file($filename);

// When (S)ave is chosen, the user should be able to enter the path to a file
// to have it save. Use fwrite() with the mode that starts at the beginning of
// a file and removes all the file contents, or creates a new one if it does
// not exist. After save, alert the user the save was successful and redisplay
// the list and main menu.
        echo '(S)ave file? Enter (Y)es or (N)o. ';

        if ($input == 'S') {
        $filename = get_input();
        write_file($filename);
        
        }
      
        echo "Save was successful."
    // // Redirect to main menu.

    } elseif ($input == 'N') {
        echo 'Would you like to add this item to the (B)eginning or the (E)nd of the list? ';
        $addTo = get_input(TRUE);
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();
            }

// Default to end if no input is given.
// PUSH = add to END, UNSHIFT = add to BEG
// If adding to (B) of the list, do this. Else, do this instead, add to the (E).
        
        if ($input == 'B') {
            array_unshift($items, 'new first item ');
            
        } elseif ($input == 'E') {
                array_push($items, 'new last item ');
            }        


    } elseif ($input == 'R') {
        echo 'Enter item number to remove: ';
        
        // Get array key
        $key = get_input();

        // Remove from array
        unset($items[$key - 1]);
        $items = array($items);

        echo 'Would you like to remove the (F)irst item or the (L)ast item from the list? ';

    }

        if($input == 'F') {
            array_shift($items, 'remove first item ');
            
        } elseif ($input == 'L') {
            array_pop($items, 'remove last item ');
        }


    } elseif ($input == 'S') {
        // How do you want to sort?
        echo 'How would you like to sort: (A)-Z, or (Z)-A? ';
        $sortBy = get_input(TRUE);
        if ($sortBy == 'A') {
            $sort($items);
        } elseif ($sortBy == 'Z') {
            rsort($items);
        }

    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
