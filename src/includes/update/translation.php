<?php

class LangOption {
    public $code;
    public $name;
}

//####### Add languages here #######

// French
$frOption = new LangOption();
$frOption->code = 'fr';
$frOption->name = 'Français';

// English
$enOption = new LangOption();
$enOption->code = 'en';
$enOption->name = 'English';

// Russian
$ruOption = new LangOption();
$ruOption->code = 'ru';
$ruOption->name = 'Русский';

// German
$deOption = new LangOption();
$deOption->code = 'de';
$deOption->name = 'Deutsch';

// Don't forget to add the new language in this array
$langOptions = array($frOption, $enOption, $ruOption, $deOption);

//##################################

$availableLangs = [];
foreach ($langOptions as $langOption) {
    array_push($availableLangs, $langOption->code);
}