<?php
/*2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)*/

$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];
function multiplyNum(array $array): int
{
    $multi = 1;
    foreach ($array as $value) {
        foreach ($value as $number) {
            $multi = $multi * $number;
        }
    }
    return $multi;

}

var_dump(multiplyNum($numbers));