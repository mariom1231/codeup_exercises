<?php

$fruits = array('apple', 'banana', 'orange', 'lime');

foreach ($fruits as $fruit) {
	echo ("\$fruits has an element with a value of {$fruit}\n");
}

?>

<?php 
$data = array('apple', 'banana', 5,  7 * 6, 88.0);

for each ($data as $item) {
	if (is_numeric($item)) {
		echo "{$item} is a number\n";
	}	elseif (is_string($item)) {
		echo "{$item} is a string\n";
	} else {
		echo "{$item} is not a number or string\n";
	}
}

?>

<?php

for ($i = 0); $i < count($colors); I++) {
	$color = $colors[$i];
	echo $color . "\n";
}
}

foreach ($colors as $color) {
	echo $color . "\n";
}


<?php

$instructors = array (
	array('first_name' => 'Jason', 'last_name => 'Straughan'),
	array('first_name' => 'Isaac', 'last_name' => 'Castillo'),
	'Ben'
	);

foreach ($instructors as $instructor) {
	foreach ($instructor as $key => $name) {
		if ($key == 'last_name') {
			echo "name\n";
		}
	}
}