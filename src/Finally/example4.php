<?php

function finallyReturnExample()
{
    try {
        return 8;
    } finally {
        return 4;
    }
}

echo finallyReturnExample() . PHP_EOL;
