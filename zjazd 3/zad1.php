<html>
<head>
    <title>Zadanie 1</title>
</head>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    day: <input type="number" name="day" min="1" max="31">
    month: <input type="number" name="month" min="1" max="12">
    year: <input type="number" name="year" min="1" max="2025">
    <input type="submit">
</form>
</html>
<?php
if (!isset($_POST['day']) || !isset($_POST['month']) || !isset($_POST['year'])) {
    exit;
}
try {
    $date = new DateTime($_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day']);
    echo "Day of birth: " . $date->format('l') . "<br>";
    $years = $date->diff(new DateTime())->y;
    echo "Years: " . $years . "<br>";
    $today = new DateTime();
    $thisYear = intval($today->format('Y'));
    $nextBirthday = new DateTime($thisYear . '-' . $_POST['month'] . '-' . $_POST['day']);
    if ($nextBirthday < $today) {
        $nextBirthday->add(new DateInterval('P1Y'));
    }
    $nextYearBirthday = new DateTime($nextBirthday->format('Y') . '-' . $_POST['month'] . '-' . $_POST['day']);
    $daysToNextBirthday = $nextYearBirthday->diff($today)->days;
    echo "Days to next birthday: " . $daysToNextBirthday . "<br>";
} catch (DateMalformedStringException $e) {
    echo "Niepoprawny format daty";
}


