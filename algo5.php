<?php

/*
CN1: fibonacci1(-1) => "false"
CN2: fibonacci2(2.2) => "false"
CN3: fibonacci3(0) => "0"
CN4: fibonacci4(1) => "1"
CN5: fibonacci5(2) => "1"
CN6: fibonacci6(5) => "5"
CN7: fibonacci7(9) => "34"
CN8: fibonacci8(15) => "610"
*/


function fibonacci($n)
{
    if (is_int($n) == false || $n<0) {
        return false;
    }

    $compteur = 0;
    $total = 0;
    
    $f0 = 0;
    $f1 = 1;

   
}

function fibonacci1()
{
    if (!fibonacci(-1)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci2()
{
    if (!fibonacci(2.2)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci3()
{
    if (fibonacci(0) == 0) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci4()
{
    if (fibonacci(1) == 1) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci5()
{
    if (fibonacci(2) == 1) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci6()
{
    if (fibonacci(5) == 5) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci7()
{
    if (fibonacci(9) == 34) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function fibonacci8()
{
    if (fibonacci(15) == 610) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}

echo PHP_EOL."Test 1: ".PHP_EOL;
fibonacci1();
echo PHP_EOL."Test 2: ".PHP_EOL;
fibonacci2();
echo PHP_EOL."Test 3: ".PHP_EOL;
fibonacci3();
echo PHP_EOL."Test 4: ".PHP_EOL;
fibonacci4();
echo PHP_EOL."Test 5: ".PHP_EOL;
fibonacci5();
echo PHP_EOL."Test 6: ".PHP_EOL;
fibonacci6();
echo PHP_EOL."Test 7: ".PHP_EOL;
fibonacci7();
echo PHP_EOL."Test 8: ".PHP_EOL;
fibonacci8();