<?php

class Person {
    public $id;
    public $name;
    public $age;
    public $country;

    function __construct($id, $name, $age, $country) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->country = $country;
    }

    function getBirthYear() {
        return 2023 - $this->age;
    }
}

$persons = [];
function addPerson($id, $name, $age, $country) {
    array_push($GLOBALS["persons"], new Person($id, $name, $age, $country));
}
