<?php

class Person {
    public $id;
    public $name;
    public $birthDate;
    public $country;

    public function __construct($id, $name, $birthDate, $country) {
        $this->id = $id;
        $this->name = $name;
        $this->birthDate = $birthDate;
        $this->country = $country;
    }

    public function getAge() {
        $age = $this->birthDate->diff(new DateTime());
        $ageTranslated = '';
        if ($age->y > 0) {
            $ageTranslated = $age->y . ' ' . translate($age->y > 1 ? 'years' : 'year');
            if ($age->m > 0) {
                if ($age->d > 0) {
                    $ageTranslated = $ageTranslated . ', '
                    . $age->m . ' ' . translate($age->m > 1 ? 'months' : 'month') . ' '
                    . translate('and') . ' '
                    . $age->d . ' ' . translate($age->d > 1 ? 'days' : 'day');
                } else {
                    $ageTranslated = $ageTranslated . ' '
                    . translate('and') . ' '
                    . $age->m . ' ' . translate($age->m > 1 ? 'months' : 'month');
                }
            } else {
                if ($age->d > 0) {
                    $ageTranslated = $ageTranslated . ' '
                    . translate('and') . ' '
                    . $age->d . ' ' . translate($age->d > 1 ? 'days' : 'day');
                }
            }
        } else {
            if ($age->m > 0) {
                $ageTranslated = $age->m . ' ' . translate($age->m > 1 ? 'months' : 'month');
                if ($age->d > 0) {
                    $ageTranslated = $ageTranslated . ' '
                    . translate('and') . ' '
                    . $age->d . ' ' . translate($age->d > 1 ? 'days' : 'day');
                }
            } else {
                $ageTranslated = $age->d . ' ' . translate($age->d > 1 ? 'days' : 'day');
            }
        }
        return $ageTranslated;
    }
}

$persons = [];
function addPerson($name, $birthDate, $country) {
    $id = sizeof($GLOBALS["persons"]) + 1;
    array_push($GLOBALS["persons"], new Person($id, $name, $birthDate, $country));
}

function yearMonthDay($y, $m, $d) {
    return new DateTime($y . '-' . $m . '-' . $d);
}
