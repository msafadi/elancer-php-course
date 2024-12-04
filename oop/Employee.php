<?php

include __DIR__ . '/Person.php';
include __DIR__ . '/Human.php';
include __DIR__ . '/Log.php';

class Employee extends Person implements Human
{
    use Log;

    public $job;

    public function __construct($name, $job)
    {
        echo __CLASS__;
        parent::__construct($name);
        $this->job = $job;
    }

    public function getName()
    {
        return $this->name;
    }

    public function test()
    {
        echo 'Test overrided';
    }

    public function getSignature()
    {
        return $this->signture; // Undefined
    }
}

//$emp = new Employee('Mohammed', 'Developer');
// echo $emp->name;
// $emp->getSignature();

//echo $emp->log();

