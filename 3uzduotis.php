<?php
/*3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
      Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)

      Destination "Paris".
      Titles: "Romantic Paris", "Hidden Paris"
      Total: 99500
*/

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];
$onlyParis = array_filter($holidays, function ($holidayParis) {
    return $holidayParis['destination'] === 'Paris';
});
$titleParis = '';
$totalParis = 0;
$cityParis = $onlyParis[0]['destination'];

foreach ($onlyParis as $tour) {
    $titleParis .= $tour['title'] . ', ';
    $totalParis += $tour['price'] * $tour['tourists'];
}
echo "City: " . $cityParis . ", Title: " . $titleParis . "Total: " . $totalParis . PHP_EOL;
foreach ($holidays as $holiday) {
    if (!is_null($holiday['price']) && $holiday['destination'] != 'Paris') {
        $total = $holiday['price'] * $holiday['tourists'];
        echo "City: " . $holiday['destination'] . ", Title: " . $holiday['title'] . ", Total: " . $total . "\n";
    }
}
