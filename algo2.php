<?php

function mention($note)
{
    if ($note < 0 || $note > 20){
        return false;
    }

    if ($note >= 18){
        return "Excellent";
    }elseif ($note >= 16){
        return "TB";
    }elseif ($note >= 14){
        return "Bien";
    }elseif ($note >= 12){
        return "AB";
    }else{
        return "";
    }
}

echo "note=21  | RESULTAT= false".PHP_EOL;
var_dump(mention(21));
echo "note= -1 | RESULTAT= false".PHP_EOL;
var_dump(mention(-1));
echo "note= 0 | RESULTAT= ".PHP_EOL;
var_dump(mention(0));
echo "note= 8 | RESULTAT= ".PHP_EOL;
var_dump(mention(8));
echo "note= 12 | RESULTAT= AB".PHP_EOL;
var_dump(mention(12));
echo "note= 15 | RESULTAT= Bien".PHP_EOL;
var_dump(mention(15));
echo "note= 16 | RESULTAT= TB".PHP_EOL;
var_dump(mention(16));
echo "note= 19 | RESULTAT= Excellent".PHP_EOL;
var_dump(mention(19));