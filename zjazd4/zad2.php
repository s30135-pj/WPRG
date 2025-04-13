<?php
if (file_exists('licznik.txt')) {
    $licznik = file_get_contents('licznik.txt');
} else {
    $licznik = 0;
}
$licznik = (int) $licznik + 1;
echo $licznik;
file_put_contents('licznik.txt', $licznik);
