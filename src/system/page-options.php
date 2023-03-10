<?php
$availablePages = [];
function addPage($page) {
    array_push($GLOBALS["availablePages"], $page);
}

require_once './config/available-pages.php';
