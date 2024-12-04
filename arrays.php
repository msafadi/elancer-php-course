<?php

$arr = [
    'a',
    'b',
    5 => 'c',
    'd',
    1.5 => 'e',
    true => 'f', // 1
    false => 'g', // 0
    '1.5' => 'h',
    null => 'i',
];

echo '<pre>';

[, $b, , , , $c] = $arr;

var_dump( $b, $c );