<?php

// Get new instance of MySQLi object
$mysqli = new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

// Retrieve a result set using SELECT
$result = $mysqli->query("SELECT * FROM national_parks");

// // Echo the number of fields
// echo "There are {$result->field_count} fields in the national_parks table." . PHP_EOL;

// // Echo the number of rows
// echo "There are {$result->num_rows} rows in the national_parks table." . PHP_EOL;

// Use print_r() to show rows using MYSQLI_ASSOC
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo($row['name'].PHP_EOL);
}


?>