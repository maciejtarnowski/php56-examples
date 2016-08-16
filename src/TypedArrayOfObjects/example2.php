<?php

function typedArrayExample(stdClass ...$stdClasses)
{
    var_dump($stdClasses);
}

$data = [new stdClass(), (object)['id' => 123], new DateTimeImmutable('now')];

typedArrayExample(...$data);
