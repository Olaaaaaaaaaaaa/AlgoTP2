<?php


function mean ($nbr1, $nbr2)
{
    $moyenne = ($nbr1 + $nbr2) / 2;

    return $moyenne;
}

echo "NBR1= 2 | NBR2=2 | RESULTAT= 2".PHP_EOL;
var_dump(mean(2,2));
echo "NBR1= 5 | NBR2=7 | RESULTAT= 6".PHP_EOL;
var_dump(mean(5,7));
echo "NBR1= 9 | NBR2=8 | RESULTAT= 8.5".PHP_EOL;
var_dump(mean(9,8));
echo "NBR1= 2 | NBR2=23 | RESULTAT= 12.5".PHP_EOL;
var_dump(mean(2,23));