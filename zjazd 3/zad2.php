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
function fibonnaciLoop($n)
{
    $seq = array(0, 1);
    for ($i = 2; $i <= $n; $i++) {
        $seq[$i] = $seq[$i-1] + $seq[$i-2];
    }
    return $seq[$n];
}

function fibonnaciRecursive($n)
{
    function fibonnaci($n, $n1, $n2)
    {
        if ($n == 0) {
            return $n1;
        }
        return fibonnaci($n-1, $n2, $n1 + $n2);
    }
    return fibonnaci($n, 0, 1);
}
if (isset($_POST['n'])) {

    $start = microtime(true);

    $n = $_POST['n'];
    $result = fibonnaciRecursive($n);
    $end = microtime(true);
    $fib = ($end-$start)*1000;
    echo "Fibonnaci rekursywnie: " . $result . " in " . $fib . " ms";
    echo "<br>";
    $start = microtime(true);
    $result = fibonnaciLoop($n);
    $end = microtime(true);
    $loop = ($end-$start)*1000;
    echo "Fibonnaci pętla: " . $result . " in " . $loop  . " ms";
    echo "<br>";
    echo "Szybszy algorytm: ";
    echo $loop < $fib ? "pętla" : "rekursywnie";
    echo " o " . abs($fib - $loop) . " ms";
}
?>
