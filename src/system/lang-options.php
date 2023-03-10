<?php
class LangOption {
    public $code;
    public $name;
}

$langOptions = [];
function addLang($code, $name) {
    $langOption = new LangOption();
    $langOption->code = $code;
    $langOption->name = $name;
    array_push($GLOBALS["langOptions"], $langOption);
}

require_once './config/langs.config.php';

$availableLangs = [];
foreach ($langOptions as $langOption) {
    array_push($availableLangs, $langOption->code);
}
