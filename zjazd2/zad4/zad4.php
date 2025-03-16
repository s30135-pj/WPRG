<html>
<head>
    <title>Zadanie 2</title>
</head>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Podaj liczbe: <input type="number" name="liczba">
    <input type="submit">
</form>
</html>
<?php
$ilosc_iteracji = 0;
function isPrime($number) {
    global $ilosc_iteracji;

    if ($number < 2) return false;
    if ($number == 2 || $number == 3) return true;
    if ($number % 2 == 0 || $number % 3 == 0) return false;

    for ($i = 5; $i * $i <= $number; $i += 6) {
        $ilosc_iteracji++;
        if ($number % $i == 0 || $number % ($i + 2) == 0) {
            return false;
        }
    }
    return true;
}
if (isset($_POST['liczba'])) {
    $liczba = $_POST['liczba'];
    if (isPrime($liczba)) {
        echo "Liczba jest pierwsza<br>";
    } else {
        echo "Liczba nie jest pierwsza<br>";
    }
    echo "Ilość iteracji: $ilosc_iteracji";
}
