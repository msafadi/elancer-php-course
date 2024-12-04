<?php

namespace A;

function time() {
    echo 'A:' . \time();
}

define('TEST', 'AA');
const TEST = 'A';

class Test
{
    public function __construct()
    {
       // echo __CLASS__;
    }
}