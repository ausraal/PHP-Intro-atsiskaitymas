<?php
/*4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą.*/

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
function holidayOffers(array $arr): void
{
    $onlyParis = array_filter($arr, function ($holidayParis) {
        return $holidayParis['destination'] === 'Paris';
    });
    $titleParis = '';
    $totalParis = 0;
    $cityParis = $onlyParis[0]['destination'];

    foreach ($onlyParis as $tour) {
        $titleParis .= $tour['title'] . ', ';
        $totalParis += $tour['price'] * $tour['tourists'];
    }
    $cityParisData = ['City' => $cityParis, 'Title' => $titleParis, 'Total' => $totalParis];
    $otherCityData = [];
    foreach ($arr as $holiday) {
        if (!is_null($holiday['price']) && $holiday['destination'] != 'Paris') {
            $total = $holiday['price'] * $holiday['tourists'];
            $otherCityData[] = ['City' => $holiday['destination'], 'Title' => $holiday['title'], 'Total' => $total];
        }
    }

    $jsonData = json_encode((array_merge($otherCityData, $cityParisData)), JSON_PRETTY_PRINT);
    file_put_contents('holidays2.json', $jsonData);
}

holidayOffers($holidays);