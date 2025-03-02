<?php
$owoce = array ("pomarancza", "jablko","banan", "pomelo", "poziomka", "ananas", "arbuz");

foreach ($owoce as $owoc) {
    $owocOdwrotny = '';
    for ($i = strlen($owoc)-1; $i >= 0 ; $i--) {
        $owocOdwrotny .= $owoc[$i];
    }
    echo "$owoc" . "<br>";
    echo "odwrotnie " . $owocOdwrotny . "<br>";
    echo "czy zaczyna się na p? " . ($owoc[0] == "p" ? "tak" : "nie") . "<br>";
}
