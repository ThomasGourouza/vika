
<?php
function translate($text) {
    $tr = $GLOBALS["translations"];
    return ($tr[$text]  ? $tr[$text]  : $text);
}