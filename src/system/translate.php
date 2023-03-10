<?php
function translate($text) {
    return TRANSLATIONS[$text] ? TRANSLATIONS[$text] : $text;
}

function localizeDate($date) {
    switch ($GLOBALS["lang"]) {
        case 'de':
            return $date->format('d.m.Y');
        case 'fr':
            return $date->format('d/m/Y');
        default:
            return $date->format('m-d-Y');
    }
    
}
