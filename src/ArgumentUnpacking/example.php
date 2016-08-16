<?php

function delta($a, $b, $c)
{
    return ($b ** 2) - 4 * $a * $c;
}

$data = [1, -4, -5];

var_dump(
    delta(...$data)
);
