<?php

try {
    $a = 2 + 2;
} catch (Exception $e) {
    echo '- NIE WYKONA SIĘ -' . PHP_EOL;
    var_dump($e);
} finally {
    echo '- FINALLY -';
}
