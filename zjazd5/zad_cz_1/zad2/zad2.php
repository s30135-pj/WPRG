<?php
if (isset($_COOKIE['odwiedziny'])) {
    echo $_COOKIE['odwiedziny'];
    setcookie('odwiedziny', $_COOKIE['odwiedziny'] + 1);
} else {
    setcookie('odwiedziny', 1);
}
