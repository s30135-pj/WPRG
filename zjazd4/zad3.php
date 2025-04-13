<?php
if ($fd = fopen('links.txt', "r")) {
    echo "<table>";
    echo "<tr><th>Link</th><th>Opis</th></tr>";
    while (!feof($fd)) {
        $cz = explode(';', fgets($fd));
        if (count($cz) != 2) {
            break;
        }
        echo "<tr>";
        echo "<td><a href='" . $cz[0] . "'>$cz[0]</a></td>" . "<td>" . $cz[1] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    fclose($fd);
}
