<?php


function test() {
    $x = 1;

    $func = function($y) use ($x) {
        // global $x;
        return $x + $y;
    };

    $x = 4;
    echo $func(2); // 3
}

// test();

$x = 2;

$arrow = fn($y) => $x + $y;
echo $arrow(3);

function makecoffee(string $cup = 'bowl', $type = 'espresso', $falvour = 'crema') : string {
    return "I like to drink $type with $falvour in $cup";
}

echo makecoffee(type: 'capucinoo', cup: "1");