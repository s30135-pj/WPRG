<?php
include './header.php';
if (isset($_GET['id'])) {
    $db = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
    $query = "SELECT * FROM samochody WHERE id = {$_GET['id']}";
    if (!$result = mysqli_query($db, $query)) {
        echo "Nie ma takiego samochodu";
    }
} else {
    echo "Nie podano id";
} ?>
<table>
    <tr>
        <th>Id</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
        <th>Rok produkcji</th>
        <th>Opis</th>
    </tr>
    <?php
    $row = mysqli_fetch_array($result);
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['marka'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['cena'] . "</td>";
        echo "<td>" . $row['rok'] . "</td>";
        echo "<td>" . $row['opis'] . "</td>";
        echo "</tr>"; ?>
</table>
<?php
if (!mysqli_close($db)) {
    echo "Błąd podczas zamykania połączenia.";
}?>


