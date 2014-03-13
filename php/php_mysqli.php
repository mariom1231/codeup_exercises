<?php

// Get new instance of MySQLi object
$mysqli = new mysqli('127.0.0.1', 'mariom1231', 'usmc6158713', 'employees');

// Check for errors
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
else {
echo $mysqli->host_info . "\n";
}
?>