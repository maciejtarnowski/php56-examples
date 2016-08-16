<?php

$data = [
    [
        'id' => 1,
        'name' => 'First row'
    ],
    [
        'id' => 3,
        'name' => 'Third row'
    ],
    [
        'id' => 5,
        'name' => 'Fifth row'
    ]
];

var_dump(
    array_column($data, 'name', 'id')
);
