<?php
/*5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale.*/

$jsonData = file_get_contents('holidays.json');
$holidays = json_decode($jsonData, true);

echo "City: " . $holidays['City'] . PHP_EOL;
echo "Title: " . $holidays['Title'] . PHP_EOL;
echo "Total: " . $holidays['Total'] . PHP_EOL;

foreach ($holidays as $key => $holiday) {
    if (is_int($key)) {
        echo "City: " . $holiday['City'] . PHP_EOL;
        echo "Title: " . $holiday['Title'] . PHP_EOL;
        echo "Total: " . $holiday['Total'] . PHP_EOL;
    }
}