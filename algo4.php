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
    $compteur = 0;
    $total = 0;

    if (is_int($nombre) == false || $nombre<=0) {
        return false;
    }

    while ($nombre != $compteur) {
        $compteur++;
        $total = $total + $compteur;
    }

    return $total;

}


function testSumIntegers1()
{
    
    if (!sumIntegers(0)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testSumIntegers2()
{
    if (!sumIntegers(2.2)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testSumIntegers3()
{
    if (!sumIntegers(-1)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testSumIntegers4()
{
    if (sumIntegers(3) == 6) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testSumIntegers5()
{
    if (sumIntegers(5) == 15) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testSumIntegers6()
{
    if (sumIntegers(9) == 45) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}

echo PHP_EOL."Test 1: ".PHP_EOL;
testSumIntegers1();
echo PHP_EOL."Test 2: ".PHP_EOL;
testSumIntegers2();
echo PHP_EOL."Test 3: ".PHP_EOL;
testSumIntegers3();
echo PHP_EOL."Test 4: ".PHP_EOL;
testSumIntegers4();
echo PHP_EOL."Test 5: ".PHP_EOL;
testSumIntegers5();
echo PHP_EOL."Test 6: ".PHP_EOL;
testSumIntegers6();
