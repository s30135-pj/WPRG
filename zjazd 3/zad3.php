<html>
<head>
    <title>Zadanie 3</title>
</head>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Podaj sciezke: <input type="text" name="sciezka">
    Podaj katalog: <input type="text" name="katalog">
    <select id="akcja" name="akcja">
        <option value="czytaj">czytaj</option>
        <option value="usun">usuń</option>
        <option value="utworz">utwórz</option>
    </select><br>
    <input type="submit">
</form>
</html>
<?php
function otworz($p)
{
    return opendir($p);
}
function czytaj($d)
{
    while ($l = readdir($d)) {
        echo $l . "<br>";
    }
}
function pusty($p)
{
    return count(scandir($p)) === 2;
}
function dzialaj($sciezka, $katalog) {
    $akcja = 'czytaj';
    $p = $sciezka . $katalog;
    if (isset($_POST['akcja'])) {
        $akcja = $_POST['akcja'];
        if ($akcja === 'utworz') {
            $sukces = mkdir($p);
            echo $sukces ? "utworzono katalog" : "nie udało sie utworzyć katalogu";
        } else if ($akcja === 'usun') {
            if (!pusty($p)) {
                echo "katalog nie jest pusty";
                exit;
            }
            $sukces = rmdir($p);
            echo $sukces ? "usunięto katalog" :  "nie udało sie usunąć katalogu";
        }
    }
    if ($akcja === 'czytaj') {
        czytaj(otworz($p));
    }
}
if (isset($_POST['sciezka']) && isset($_POST['katalog'])) {
    if (substr($_POST['sciezka'], -1) !== '/' ) {
        $_POST['sciezka'] .= '/';
    }

    $os = php_uname();
    if (str_contains($os, 'Windows')) {
        $_POST['sciezka'] = str_replace('/', '\\', $_POST['sciezka']);
    }
    dzialaj($_POST['sciezka'], $_POST['katalog']);
}
