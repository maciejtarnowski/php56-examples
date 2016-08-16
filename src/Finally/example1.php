<?php

try {
    throw new Exception();
} catch (Exception $e) {
    echo '- EXCEPTION -' . PHP_EOL;
    var_dump($e);
} finally {
    echo '- FINALLY -';
}
