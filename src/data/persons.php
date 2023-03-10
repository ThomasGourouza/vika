<?php
    $personCols = new Person();
    $personCols->id = 'id';
    $personCols->name = 'name';
    $personCols->age = 'age';
    $personCols->country = 'country';

    $persons = [];

    $person = new Person();
    $person->id = 1;
    $person->name = 'Jean';
    $person->age = 31;
    $person->country = 'France';
    array_push($persons, $person);

    $person = new Person();
    $person->id = 2;
    $person->name = 'Jeanno';
    $person->age = 27;
    $person->country = 'Portugal';
    array_push($persons, $person);
