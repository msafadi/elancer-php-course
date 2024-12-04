<?php

abstract class Person
{
    // Class members
    // Constants
    const MALE = 'm';
    const FEMALE = 'f';

    // Properties
    public string $name = '';
    public readonly int $age;
    protected string $gender;
    private $signture;

    // Static properties
    public static $country;

    // Methods
    // Constructor
    public function __construct($name, $age = 0, $gender = self::MALE)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    // Destructor
    public function __destruct()
    {
        //echo 'Object deleted!';
    }

    public function hello()
    {
        echo 'Hello, ' . $this->name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    final public function getGender()
    {
        return $this->gender;
    }

    public static function getCountry()
    {
        return self::$country;
    }

    // public abstract function test();
}
/*
$person = new Person(name: 'Mohammed', age: 30, gender: Person::MALE);
echo $person->age;
//$person->name = 'Mohammed';

$person::$country = 'Palestine';


$person2 = $person;
$person2->name = 'Ahmed';
$person3 = new Person('ali');
$person4 = &$person;

Person::$country = 'Jordan';
echo Person::getCountry();



//$person->hello() . "\n";

//$person->setGender($person::FEMALE);
// echo $person->getGender()  . "\n";


*/