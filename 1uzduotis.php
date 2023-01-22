<?php
/*1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)*/

   $numbers = [
       15,
       55,
       66,
       91,
       100,
       995,
       17,
       550,
   ];
   function sumOddNum (array $array): int {
       $sum = 0;
       foreach ($array as $number){
           if ($number % 2 ===0) {
               $sum = $sum + $number;
           }
       }
       return $sum;
   }
   var_dump(sumOddNum($numbers));