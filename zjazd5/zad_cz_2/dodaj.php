<?php
include './header.php';
if (isset($_POST['marka'])) {

    $db = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
    $opis = $_POST['opis'] ?? "";
    $cena = $_POST['cena'];
    $rok = $_POST['rok'] ?? 0;
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $stmt = $db->prepare("INSERT INTO SAMOCHODY (marka, model, rok, cena, opis) VALUES (?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssids", $marka, $model, $rok, $cena, $opis);
        if ($stmt->execute()) {
            echo "Dodano pomyślnie";
        } else {
            echo "Błąd podczas dodawania";
        }
        $stmt->close();
    } else {
        echo "Błąd podczas przygotowywania zapytania.";
    }

    if (!mysqli_close($db)) {
        echo "Błąd podczas zamykania połączenia.";
    }
}

?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="marka">Marka:</label>
    <input type="text" id="marka" name="marka" required>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required>
    <label for="cena">Cena:</label>
    <input type="text" id="cena" name="cena" required>
    <label for="rok">Rok:</label>
    <input type="text" id="rok" name="rok">
    <label for="opis">Opis:</label>
    <input type="text" id="opis" name="opis">
    <input type="submit">

</form>

