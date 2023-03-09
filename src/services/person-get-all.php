<?php
    // Get the data
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `Person`;";
    $result = $conn->query($sql);

    $personCols = new Person();
    $personCols->id = 'id';
    $personCols->name = 'name';
    $personCols->age = 'age';
    $personCols->country = 'country';

    $persons = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $person = new Person();
            $person->id = $row[$personCols->id];
            $person->name = $row[$personCols->name];
            $person->age = $row[$personCols->age];
            $person->country = $row[$personCols->country];
            array_push($persons, $person);
        }
        $result->close();
    }
    $conn->close();
    // console_log($persons);
