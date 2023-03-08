<?php

class LangOption {
    public $code;
    public $name;
}

//############ Languages ############

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

//###################################

$langOptions = array($frOption, $enOption, $ruOption, $deOption);

$availableLangs = [];
foreach ($langOptions as $langOption) {
    array_push($availableLangs, $langOption->code);
}