<html>
<head>
    <title>Zadanie 1</title>
</head>
<body>
<h1>Wybierz plik:</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="path">Plik:</label>
<input type="file" id="path" name="path">
    <input type="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['path'])) {
    function reverseFile($file): void
    {
        $line = fgets($file);
        if (!feof($file)) {
            reverseFile($file);
        } else {
            file_put_contents($_POST['path'], '');
        }
        echo $line . "<br>";
        fwrite($file, $line);
    }
    if (!$fd = fopen($_POST['path'], "r+")) {
        echo("Nie mogę otworzyć pliku!");
    } else {
        reverseFile($fd);
    }
    fclose($fd);
}
