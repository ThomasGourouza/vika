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
        $timeTranslated = '';
        if ($time->y > 0) {
            $timeTranslated = $time->y . ' ' . translate($time->y > 1 ? 'years' : 'year');
            if ($time->m > 0) {
                if ($time->d > 0) {
                    $timeTranslated = $timeTranslated . ', '
                    . $time->m . ' ' . translate($time->m > 1 ? 'months' : 'month') . ' '
                    . translate('and') . ' '
                    . $time->d . ' ' . translate($time->d > 1 ? 'days' : 'day');
                } else {
                    $timeTranslated = $timeTranslated . ' '
                    . translate('and') . ' '
                    . $time->m . ' ' . translate($time->m > 1 ? 'months' : 'month');
                }
            } else {
                if ($time->d > 0) {
                    $timeTranslated = $timeTranslated . ' '
                    . translate('and') . ' '
                    . $time->d . ' ' . translate($time->d > 1 ? 'days' : 'day');
                }
            }
        } else {
            if ($time->m > 0) {
                $timeTranslated = $time->m . ' ' . translate($time->m > 1 ? 'months' : 'month');
                if ($time->d > 0) {
                    $timeTranslated = $timeTranslated . ' '
                    . translate('and') . ' '
                    . $time->d . ' ' . translate($time->d > 1 ? 'days' : 'day');
                }
            } else {
                $timeTranslated = $time->d . ' ' . translate($time->d > 1 ? 'days' : 'day');
            }
        }
        return $timeTranslated;
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
