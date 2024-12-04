<?php

trait Log
{
    public function log()
    {
        //echo $this->name;
        echo self::class;
    }

    public function test()
    {
        echo __METHOD__;
    }
}