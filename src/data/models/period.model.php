<?php

class Period {
    public $id;
    public $begin;
    public $end;
    public $place;
    public $title;
    public $description;

    public function __construct($id, $begin, $end, $place, $title, $description) {
        $this->id = $id;
        $this->begin = $begin;
        $this->end = $end;
        $this->place = $place;
        $this->title = $title;
        $this->description = $description;
    }

    public function getTime() {
        $time = $this->end->diff($this->begin);
        $timeItems = [[$time->y, 'year'], [$time->m, 'month'], [$time->d, 'day']];

        $yearMonthDaysTranslated = [];
        foreach ($timeItems as $timeItem) {
            if ($timeItem[0] > 0) {
                array_push($yearMonthDaysTranslated, $this->translateTime($timeItem[0], $timeItem[1]));
            }
        }
        return join(", ", $yearMonthDaysTranslated);
    }

    private function translateTime($value, $unit) {
        return $value . ' ' . translate($value > 1 ? $unit . 's' : $unit);
    }
    
}

$periods = [];
function addPeriod($begin, $end, $place, $title, $description) {
    $id = sizeof($GLOBALS["periods"]) + 1;
    array_push($GLOBALS["periods"], new Period($id, $begin, $end, $place, $title, $description));
}

function dayMonthYear($d, $m, $y) {
    return new DateTime($y . '-' . $m . '-' . $d);
}

function now() {
    return new DateTime();
}
