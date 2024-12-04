<?php

namespace Test;

use A\Test;
use B\Test as TestB;

use function A\time;

// use const A\TEST;

include __DIR__ . '/A/Test.php';
include __DIR__ . '/B/Test.php';

$test = new Test;
$test = new TestB;

// echo time();
echo TEST;


