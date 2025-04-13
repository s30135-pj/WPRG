<?php
if (file_exists('whitelist.txt')) {
    $whitelist = file_get_contents('whitelist.txt');
} else {
    $whitelist = '';
}
if (str_contains($whitelist, $_SERVER['REMOTE_ADDR'])) {
    include 'zad4hiddenpage.php';
} else {
    echo "Nothing to see here";
}
