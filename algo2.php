<?php

/*
CN1: mention(21) => "false"
CN2: mention(-1) => "false"
CN3: mention(0) => ""
CN4: mention(8) => ""
CN4: mention(12) => "AB"
CN4: mention(15) => "Bien"
CN4: mention(16) => "TB"
CN4: mention(19) => "Excellent"
*/

function mention($note)
{
    
}

function testMention21()
{
    if (!mention(21)) {
        echo "Le test est réussie";
    } else {
    echo  "Le test n'est pas réussie";
    }
}

testMention21();