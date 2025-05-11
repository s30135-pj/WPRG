<?php

$db = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
$conn = $db;

$sqlFile = './db.sql';
$sqlContent = file_get_contents($sqlFile);
if ($sqlContent === false) {
    die("Error reading SQL file.");
}

// Split SQL statements and execute them
$sqlStatements = explode(";", $sqlContent);

foreach ($sqlStatements as $query) {
    $trimmedQuery = trim($query);
    if (!empty($trimmedQuery)) {
        if ($conn->query($trimmedQuery) === false) {
            echo "Error executing query \n";
        }
    }
}

echo "SQL file executed successfully!";

if (!mysqli_close($db)) {
    echo "Błąd podczas zamykania połączenia.";
} ?>
