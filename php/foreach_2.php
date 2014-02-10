<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

	foreach ($books as $title => $book) {
		
		echo $title . "\n";
		
		foreach ($book as $key => $value) {
			echo $key . "\n" . $value . "\n"; 
		}

		if ($key == 'published' && $value > 1950) {
		echo "$title\n";
	}
// 	if ($book['published'] > 1950)

// echo "title\n";	{
// echo "Published: " . $book['Published'] . "\n";
// echo "Authored: " . $book['Authored'] . "\n";
// echo "Pages: " . $book['Pages'] . "\n";
//	}
}	