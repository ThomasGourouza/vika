<?php
function translate($text) {
    return TRANSLATIONS[$text] ? TRANSLATIONS[$text] : $text;
}
