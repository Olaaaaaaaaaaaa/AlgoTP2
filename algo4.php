<?php

/*
CN1: sumIntegers(0) => "false"
CN2: sumIntegers(2.2) => "false"
CN3: sumIntegers(-1) => "false"
CN4: sumIntegers(3) => "6"
CN5: sumIntegers(5) => "15"
CN6: sumIntegers(9) => "45"


*/

function sumIntegers($nombre)
{
    
}

function testSumIntegers1()
{
    if (!sumIntegers(0)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}