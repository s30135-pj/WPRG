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
<?php
function displayData() {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    echo "Imie: $imie<br>";
    echo "Nazwisko: $nazwisko<br>";
    echo "Telefon: $telefon<br>";
    echo "Email: $email<br>";
    echo "Adres: $adres<br>";
}
function displayAdditionalPeople()
{
    $imiona = $_POST['imiona'];
    $nazwiska = $_POST['nazwiska'];
    $emaile = $_POST['emaile'];
    $telefony = $_POST['telefony'];
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
    $ilosc = $_POST['ilosc'];
    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    echo "Ilość osób: $ilosc<br>";
    echo "Data rezerwacji: $data<br>";
    echo "Godzina rezerwacji: $godzina<br>";
    if (isset($_POST['lozko'])) {
        if ($_POST['lozko'] == "tak") {
            echo "Dodatkowe łóżko.<br>";
        }
    }
    if (isset($_POST['popielniczka'])) {
        echo "Dodatkowe popielniczka.<br>";
    }
    if (isset($_POST['minibar'])) {
        echo "Dodatkowy minibar.<br>";
    }
    if (isset($_POST['klimatyzacja'])) {
        echo "Dodatkowa klimatyzacja.<br>";
    }
    if (isset($_POST['imiona'])) {
        displayAdditionalPeople();
    }
}
