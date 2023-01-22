<?php
/*6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų ir juos sudaugintų
 tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas ne skaičius, reikia,
 kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą.*/

$firstNum = readline('Please enter first number: ');
$secondNum = readline('Please enter second number: ');
function multiply ($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Error code 1" . PHP_EOL ."Value provided is not a number";
    } else {
        return ($num1 * $num2)**2;
    }
}
print_r(multiply($firstNum, $secondNum));