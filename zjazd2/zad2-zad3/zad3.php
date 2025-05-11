<?php
echo "<h1>Podaj dane pozostałych osób</h2>";
echo "<form action='display.php' method='post'>";
foreach ($_POST as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $subValue) {
            echo "<input type='hidden' name='{$key}[]' value='" . htmlspecialchars($subValue, ENT_QUOTES) . "'>";
        }
    } else {
        echo "<input type='hidden' name='{$key}' value='" . htmlspecialchars($value, ENT_QUOTES) . "'>";
    }
}
for ($i = 1; $i < $_POST['ilosc']; $i++) {
    echo "<h2>Osoba nr $i</h2>";
    echo "Imie*: <input type='text' name='imiona[]' required><br>";
    echo "Nazwisko*: <input type='text' name='nazwiska[]' required><br>";
    echo "Email: <input type='text' name='emaile[]'><br>";
    echo "Telefon: <input type='text' name='telefony[]'><br>";
}
echo "<input type='submit'>";
echo "</form>";
