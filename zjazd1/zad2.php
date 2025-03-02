<html>
<head>
    <title>Zadanie 2</title>
</head>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Dolny zakres: <input type="text" name="min">
    Górny zakres: <input type="text" name="max">
    <input type="submit">
</form>
</html>
<?php
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i*$i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
if (isset($_POST['min']) && isset($_POST['max'])) {
$number1 = $_POST['min'];
$number2 = $_POST['max'];
for ($i = $number1; $i <= $number2; $i++) {
    if (isPrime($i)) {
        echo "$i ";
    }
} }
?>
