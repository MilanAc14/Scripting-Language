<?php
/*
type of array
1. numeric index array
2. associative array 
3. multi dimensional array

*/

// numeric array
$animals = [ "lion", "tiger", "cat"];
$moreAnimals = array ("cow", "dog");

// associative array
$animalShelter = [
    "lion" => "jungle",
    "cat" => "home"
];

$genres = [
    "fiction"=>[
        "action and adventure",
        "sci-fi",
        "fantasy"
    ],
    "non-fiction "=>[
        "biography",
        "documentary"
    ]
    ];
    echo $genres["fiction"][1];


?>