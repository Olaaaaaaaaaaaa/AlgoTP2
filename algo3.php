<?php

/*
CN1: getCost(-1) => "false"
CN2: getCost(2.2) => "false"
CN3: getCost(13) => "13"
CN4: getCost(125) => "124.5"
CN5: getCost(162) => "160.4"
CN6: getCost(180) => "177.25"
CN7: getCost(300) => "280.25"
CN8: getCost(600) => "480"
*/

function getCost($volume)
{
    $prix = 0;
    if (is_int($volume) == false || $volume<=0) {
        return false;
    }
    if ($volume <=100) {
        $prix = $volume*1;
        return $prix;
    }
    if ($volume <=150) {
        $prix = (1*100) + (0.98*($volume-100));
        return $prix;
    }
    if ($volume <=175) {
        $prix = (1*100) + (0.98*50) + (0.95*($volume-150));
        return $prix;
    }
    if ($volume <=200) {
        $prix = (1*100) + (0.98*50) + (0.95*25) + (0.90*($volume-175));
        return $prix;
    }
    if ($volume >200 && $volume<500) {
        $prix = (1*100) + (0.98*50) + (0.95*25) + (0.90*25) + (0.85*($volume-200));
        return $prix;
    }
    if ($volume >=500) {
        $prix = $volume*0.80;
        return $prix;
    }
}

var_dump(getCost(300));

function testGetCost1()
{
    if (!getCost(-1)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost2()
{
    if (!getCost(2.2)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost3()
{
    if (getCost(13) == 13) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost4()
{
    if (getCost(125) == 124.5) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost5()
{
    if (getCost(162) == 160.4) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost6()
{
    if (getCost(180) == 177.25) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost7()
{
    if (getCost(300) == 280.25) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testGetCost8()
{
    if (getCost(600) == 480) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}

echo PHP_EOL."Test 1: ".PHP_EOL;
testGetCost1();
echo PHP_EOL."Test 2: ".PHP_EOL;
testGetCost2();
echo PHP_EOL."Test 3: ".PHP_EOL;
testGetCost3();
echo PHP_EOL."Test 4: ".PHP_EOL;
testGetCost4();
echo PHP_EOL."Test 5: ".PHP_EOL;
testGetCost5();
echo PHP_EOL."Test 6: ".PHP_EOL;
testGetCost6();
echo PHP_EOL."Test 7: ".PHP_EOL;
testGetCost7();
echo PHP_EOL."Test 8: ".PHP_EOL;
testGetCost8();
