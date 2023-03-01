<?php

/*
CN1: mean(4, 1) => "2.5"
CN2: mean(8, 5) => "6.5"
CN3: mean(5, 2) => "3.5"
CN4: mean(3, 19) => "11"
*/

function mean($nbr1, $nbr2)
{
    return ($nbr1 + $nbr2) / 2;
}

echo "CN1: mean(4, 1) => '2.5'".PHP_EOL;
var_dump(mean(4, 1));
echo "CN2: mean(8, 5) => '6.5'".PHP_EOL;
var_dump(mean(8, 5));
echo "CN3: mean(5, 2) => '3.5'".PHP_EOL;
var_dump(mean(5, 2));
echo "CN4: mean(3, 19) => '11'".PHP_EOL;
var_dump(mean(3, 19));