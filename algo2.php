<?php

/*
CN1: mention(21) => "false"
CN2: mention(-1) => "false"
CN3: mention(0) => "Pas de mention"
CN4: mention(8) => "Pas de mention"
CN5: mention(12) => "AB"
CN6: mention(15) => "Bien"
CN7: mention(16) => "TB"
CN8: mention(19) => "Excellent"
*/

function mention($note)
{
    if ($note<0 || $note>20) {
        return false;
    }
    if($note>=0 && $note<=11) {
        return "Pas de mention";
    }
    if ($note>=12 && $note<14) {
        return "AB";
    }
    if ($note>=14 && $note<16) {
        return "Bien";
    }
    if ($note>=16 && $note<18) {
        return "TB";
    }
    if ($note>=18) {
        return "Excellent";
    }
}

function testMention21()
{
    if (!mention(21)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention_1()
{
    if (!mention(-1)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention0()
{
    if (mention(0) == "Pas de mention") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention8()
{
    if (mention(8) == "Pas de mention") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention12()
{
    if (mention(12) == "AB") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention15()
{
    if (mention(15) == "Bien") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention16()
{
    if (mention(16) == "TB") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}
function testMention19()
{
    if (mention(19) == "Excellent") {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}

echo PHP_EOL."Test 1: ".PHP_EOL;
testMention21();
echo PHP_EOL."Test 2: ".PHP_EOL;
testMention_1();
echo PHP_EOL."Test 3: ".PHP_EOL;
testMention0();
echo PHP_EOL."Test 4: ".PHP_EOL;
testMention8();
echo PHP_EOL."Test 5: ".PHP_EOL;
testMention12();
echo PHP_EOL."Test 6: ".PHP_EOL;
testMention15();
echo PHP_EOL."Test 7: ".PHP_EOL;
testMention16();
echo PHP_EOL."Test 8: ".PHP_EOL;
testMention19();
