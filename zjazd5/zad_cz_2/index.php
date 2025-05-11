<?php
include './header.php';
$db = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
$query = "SELECT id, marka, model, cena FROM samochody
ORDER BY cena ASC
LIMIT 5;";
if (!$result = mysqli_query($db, $query)) {
    echo "Błąd wykonywania zapytania.";
    mysqli_close($db);
} ?>

<table>
    <tr>
        <th>Id</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td><a href='szczegoly.php?id=" . $row['id'] . "'>" . $row['id'] . "</a></td>";
        echo "<td>" . $row['marka'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['cena'] . "</td>";
        echo "</tr>";
    }?>
</table>
<?php
if (!mysqli_close($db)) {
    echo "Błąd podczas zamykania połączenia.";
}?>
