<?php
class LangOption {
    public $code;
    public $flag;
    public $name;

    public function __construct($code, $flag, $name) {
        $this->code = $code;
        $this->flag = $flag;
        $this->name = $name;
    }
}

$langOptions = [];
function addLang($code, $flag, $name) {
    array_push($GLOBALS["langOptions"], new LangOption($code, $flag, $name));
}

require_once './config/langs.config.php';

$availableLangs = [];
foreach ($langOptions as $langOption) {
    array_push($availableLangs, $langOption->code);
}
