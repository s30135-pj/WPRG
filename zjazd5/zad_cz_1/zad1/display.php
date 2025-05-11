
<?php
session_start();
function displayData() {
    $imie = $_SESSION['imie'];
    $nazwisko = $_SESSION['nazwisko'];
    $karta = $_SESSION['karta'];
    echo "Imie: $imie<br>";
    echo "Nazwisko: $nazwisko<br>";
    echo "Karta: $karta<br>";
}
function displayAdditionalPeople()
{
    $imiona = $_SESSION['imiona'];
    $nazwiska = $_SESSION['nazwiska'];
    $emaile = $_SESSION['emaile'];
    $telefony = $_SESSION['telefony'];
    echo "<h3>Dane osób:</h3>";
    foreach( $imiona as $imie) {
        echo "Imie: $imie<br>";
    }
    foreach( $nazwiska as $nazwisko) {
        echo "Nazwisko: $nazwisko<br>";
    }
    foreach( $emaile as $email) {
        echo "Email: $email<br>";
    }
    foreach( $telefony as $telefon) {
        echo "Telefon: $telefon<br>";
    }
}
function displayReservation() {
    $ilosc = $_SESSION['ilosc'];
    $data = $_SESSION['data'];
    $godzina = $_SESSION['godzina'];
    echo "Ilość osób: $ilosc<br>";
    echo "Data rezerwacji: $data<br>";
    echo "Godzina rezerwacji: $godzina<br>";
    if (isset($_SESSION['imiona'])) {
        displayAdditionalPeople();
    }
} ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Podsumowanie rezerwacji</title>
</head>
<body>
<div>
    <h1>Podsumowanie rezerwacji</h1>
    <div>
        <h2>Dane klienta:</h2>
        <?php displayData(); ?>
    </div>
    <div>
        <h2>Dane rezerwacji:</h2>
        <?php displayReservation(); ?>
    </div>
</div>
</body>
</html>
