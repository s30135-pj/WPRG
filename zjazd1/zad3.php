<html>
<head>
    <title>Zadanie 2</title>
</head>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Podaj n: <input type="number" name="n">
    <input type="submit">
</form>
</html>
<?php
function fibonnaci($n): array
{
    $seq = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        $seq[$i] = $seq[$i-1] + $seq[$i-2];
    }
    return $seq;
}
if (isset($_POST['n'])) {
    $n = $_POST['n'];
    $fib = fibonnaci($n);
    echo "Nta liczba Fibonnaciego: " . $fib[$n - 1] . "<br>";
    echo "Nieparzyste liczby Fibonnaciego: " . "<br>";
    $nr = 1;
    for ($i = 0; $i <= $n - 1; $i++) {
        if ($fib[$i] % 2 != 0) {
            echo $nr . ". " . $fib[$i] . "<br>";
            $nr++;
        }
    }
}
?>
