<?php

const A = 2;
const B = A + 2;
const C = A ** 8;
const D = [A, B, C];

var_dump(A);
echo PHP_EOL;

var_dump(B);
echo PHP_EOL;

var_dump(C);
echo PHP_EOL;

var_dump(D);
echo PHP_EOL;

function expressionExample($a = D[2] / B) // ¯\_(ツ)_/¯
{
    var_dump($a);
}

expressionExample();
