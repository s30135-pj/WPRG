<?php
if (isset($_COOKIE['odwiedziny'])) {
    if (!isset($_COOKIE['odwiedzony'])) {
        setcookie('odwiedziny', $_COOKIE['odwiedziny'] + 1, time() + (86400 * 365));
        $midnight = strtotime('tomorrow midnight');
        setcookie('odwiedzony', 1, $midnight);
    }
} else {
    setcookie('odwiedziny', 1, time() + (86400 * 365));
}
echo $_COOKIE['odwiedziny'];
