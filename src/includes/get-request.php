<?php
function getPage($request) {
    return ($request
        && in_array($request, $GLOBALS["availablePages"]))
        ? $request : "welcome";
}

function getLang($requestLang) {
    $langs = $GLOBALS["availableLangs"];
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $defaultLang = in_array($browserLang, $langs)
        ? $browserLang : "en";

    return in_array($requestLang, $langs)
        ? $requestLang : $defaultLang;
}
