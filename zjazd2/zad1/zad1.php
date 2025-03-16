<?php
$pierwsza = $_POST['pierwsza'];
$druga = $_POST['druga'];
$dzialanie = $_POST['dzialanie'];
$output = 0;
switch ($dzialanie) {
    case 'dodaj':
        $output = $pierwsza + $druga;
        break;
    case 'odejmij':
        $output = $pierwsza - $druga;
        break;
    case 'mnoz':
        $output = $pierwsza * $druga;
        break;
    case 'dziel':
        if ($druga == 0) {
            $output = "Error: Division by zero!";
        } else {
            $output = $pierwsza / $druga;
        }
        break;
    default:
        break;
}
header("Location: index.html?wynik=" . urlencode($output));
