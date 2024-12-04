<?php

namespace B;


function time() {
    echo 'B:' . \time();
}

const TEST = 'B';

class Test
{
    public function __construct()
    {
        //echo __CLASS__;
    }
}