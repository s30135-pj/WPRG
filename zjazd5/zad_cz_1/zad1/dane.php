<?php
session_start();
if (isset($_POST['karta'])) {
$_SESSION['karta'] = $_POST['karta'];
$_SESSION['data'] = $_POST['data'];
$_SESSION['godzina'] = $_POST['godzina'];
$_SESSION['nazwisko'] = $_POST['nazwisko'];
$_SESSION['imie'] = $_POST['imie'];
$_SESSION['ilosc'] = $_POST['ilosc'];
}
echo "<h1>Podaj dane osób na zamówieniu</h2>";
echo "<form action=\"{$_SERVER['PHP_SELF']}\" method='post'>";
for ($i = 1; $i <= $_SESSION['ilosc']; $i++) {
    echo "<h2>Osoba nr $i</h2>";
    echo "Imie*: <input type='text' name='imiona[]' required><br>";
    echo "Nazwisko*: <input type='text' name='nazwiska[]' required><br>";
    echo "Email: <input type='text' name='emaile[]'><br>";
    echo "Telefon: <input type='text' name='telefony[]'><br>";
}
echo "<input type='submit'>";
echo "</form>";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['imiona'])) {
    $_SESSION['imiona'] = $_POST['imiona'];
    $_SESSION['nazwiska'] = $_POST['nazwiska'];
    $_SESSION['emaile'] = $_POST['emaile'];
    $_SESSION['telefony'] = $_POST['telefony'];
    echo "Zapisano dane";
}?>
<form action="display.php" method="post">
    <input type="submit" value="Przejdź dalej">
</form>
