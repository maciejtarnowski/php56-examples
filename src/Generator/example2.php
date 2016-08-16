<?php

$data = 'klucz;wartosc' . PHP_EOL;
$data .= 'inny klucz;inna wartosc';

function keyValueYield($data)
{
    $rows = explode(PHP_EOL, $data);

    foreach ($rows as $row) {
        $rowData = explode(';', $row);
        yield $rowData[0] => $rowData[1];
    }
}

foreach (keyValueYield($data) as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
}
