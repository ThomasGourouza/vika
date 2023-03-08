<?php

class LangOption {
    public $code;
    public $name;
}

$frOption = new LangOption();
$frOption->code = 'fr';
$frOption->name = 'Français';

$enOption = new LangOption();
$enOption->code = 'en';
$enOption->name = 'English';

$ruOption = new LangOption();
$ruOption->code = 'ru';
$ruOption->name = 'Русский';

$deOption = new LangOption();
$deOption->code = 'de';
$deOption->name = 'Deutsch';

$langOptions = array($frOption, $enOption, $ruOption, $deOption);

$availableLangs = [];
foreach ($langOptions as $langOption) {
    array_push($availableLangs, $langOption->code);
}