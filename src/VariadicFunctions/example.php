<?php

function average(...$numbers)
{
    return array_sum($numbers) / count($numbers);
}

var_dump(
    average(5, 5, 5, 4, 4)
);
echo PHP_EOL;

function variadicExample($prefix, $suffix, ...$items)
{
    return $prefix . join(', ', $items) . $suffix;
}

var_dump(
    variadicExample('Items: ', '. ~ The End ~', 'First', 'Second', 'Last')
);
