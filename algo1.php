<?php

/*
CN1: mean(4, 1) => "2.8"
CN2: mean(8, 5) => "6.5"
CN3: mean(5, 2) => "4.3"
CN4: mean(2, 19) => "10.05"
*/

function mean($nbr1, $nbr2)
{
    return ($nbr1 + $nbr2) / 2;
}

echo "CN1: mean(4, 1) => '2.8'".PHP_EOL;
var_dump(mean(4, 1));
echo "CN2: mean(8, 5) => '6.5'".PHP_EOL;
var_dump(mean(8, 5));
echo "CN3: mean(5, 2) => '4.3'".PHP_EOL;
var_dump(mean(5, 2));