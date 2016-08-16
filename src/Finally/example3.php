<?php

function finallyExample($a)
{
    try {
        return 2 + $a;
    } finally {
        echo '- FINALLY -' . PHP_EOL;
    }
}

echo finallyExample(2) . PHP_EOL;
