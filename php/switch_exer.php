<?php
$value = 'Hello!';

if (is_int($value)) {
    echo '$value is an integer';
} elseif (is_float($value)) {
    echo '$value is a float';
} elseif (is_bool($value)) {
    echo '$value is a boolean';
} elseif (is_array($value)) {
    echo '$value is an array';
} elseif (is_null($value)) {
    echo '$value is null';
} elseif (is_string($value)) {
    echo '$value is a string';
}

?>

<?php

$value = 'Hello!';

switch (gettype($value)) {
    case 'integer':
        echo '$value is an integer';
        break;
    case 'float':
        echo '$value is a float';
        break;        
    case 'boolean':
        echo '$value is a boolean';
        break;            
    case 'array':
        echo '$value is an array';
        break;
    case 'null':
        echo '$value is null';
        break;        
    case 'string':
        echo '$value is a string';
        break;            
}

?>

