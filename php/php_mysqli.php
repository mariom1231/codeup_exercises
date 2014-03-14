<?php

// Get new instance of MySQLi object
$mysqli = new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

// Check for errors
if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
else {
echo $mysqli->host_info . "\n";
}

// $tablecreate ='create table national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(50) NOT NULL,
//     location VARCHAR(50) NOT NULL,
//     description TEXT NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres FLOAT(10,2) DEFAULT 0, 
//     PRIMARY KEY (id)
// );';


$parks = [

['name' => 'Arches',
'location' => 'Utah',
'date_established' => '1971-11-12',
'area_in_acres' => '76518.98',
'description' => 'This site features more than 2,000 natural sandstone arches, including the Delicate Arch. In a desert climate millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],

['name' => 'Badlands',
'location' => 'South Dakota',
'date_established' => '1978-11-10',
'area_in_acres' => '242755.94',
'description' => "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world\'s richest fossil beds from the Oligocene epoch, and there is wildlife including bison, bighorn sheep, black-footed ferrets, and swift foxes."],

['name' => 'Channel Islands',
'location' =>    'California',
'date_established' => '1980-03-05',
'area_in_acres' => '249561.00',
'description' => "Five of the eight Channel Islands are protected, and half of the park\'s area is underwater. The islands have a unique Mediterranean ecosystem. They are home to over 2,000 species of land plants and animals, and 145 are unique to them. The islands were originally settled by the Chumash people."],

['name' => 'Everglades',
'location' => 'Florida',
'date_established' => '1934-05-30',
'area_in_acres' => '1508537.90',
'description' => 'The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology.'],

['name' => 'Great Smoky Mountains',
'location' => 'North Carolina, ' . ' ', ' Tennessee',
'date_established' => '1934-06-15',
'area_in_acres' => '521,490.13',
'description' =>  "The Great Smoky Mountains, part of the Appalachian Mountains, have a wide range of elevations, making them home to over 400 vertebrate species, 100 tree species, and 5000 plant species. Hiking is the park\'s main attraction, with over 800 miles (1,300 km) of trails, including 70 miles (110 km) of the Appalachian Trail. Other activities are fishing, horseback riding, and visiting some of nearly 80 historic structures."],

['name' => 'Joshua Tree',
'location' => 'California',
'date_established' => '1994-10-31',
'area_in_acres' => '789745.47',
'description' => 'Covering parts of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, this is the home of the Joshua tree. Across great elevation changes are sand dunes, dry lakes, rugged mountains, and granite monoliths.'],

['name' => 'Mammoth Cave',
'location' => 'Kentucky',
'date_established' => '1941-07-01',
'area_in_acres' => '52830.19',
'description' => "With 392 miles (631 km) of passageways mapped, Mammoth Cave is by far the world\'s longest cave system. Cave animals include eight bat species, Kentucky cave shrimp, Northern cavefish, and cave salamanders. Above ground, the park contains Green River (Kentucky), 70 miles of hiking trails, sinkholes, and springs."],

['name' => 'Petrified Forest',
'location' => 'Arizona',
'date_established' => '1962-12-09',
'area_in_acres' => '93532.57',
'description' => 'This portion of the Chinle Formation has a great concentration of 225-million-year-old petrified wood. The surrounding region, the Painted Desert, has eroded red-hued volcanic rock called bentonite. There are also dinosaur fossils and over 350 Native American sites.'],

['name' => 'Death Valley',
'location' => 'California, Nevada',
'date_established' => '1994-10-31',
'area_in_acres' => '3372401.96',
'description' => 'Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130°F (54°C) and it is home to Badwater Basin, the lowest point in North America. There are canyons, colorful badlands, sand dunes, mountains, and over 1000 species of plants in this graben on a fault line. Further geologic points of interest are salt flats, springs, and buttes.'],

['name' => 'Yellowstone',
'location' => 'Wyoming, Montana, Idaho',
'date_established' => '1872-03-01',
'area_in_acres' => '2219790.71',
'description' => 'Situated on the Yellowstone Caldera, the first national park in the world has vast geothermal areas such as hot springs and geysers, the best-known being Old Faithful and Grand Prismatic Spring. The yellow-hued Grand Canyon of the Yellowstone River has numerous waterfalls, and four mountain ranges run through the park. There are almost 60 mammal species, including the gray wolf, grizzly bear, lynx, bison, and elk.'],

];


foreach ($parks as $park) {
    // $park['description'] = $mysqli->real_escape_string('{$park['description']}');
     $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}', '{$park['description']}');";
    // $mysqli->query($query);
    if (!$mysqli->query($query)) {
    	throw new Exception("Query failed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}


}

?>