<?php

require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');



$countriesQuery = "SELECT * FROM Країни;";
$countriesResult = $mysqli->query($countriesQuery);


if ($countriesResult->num_rows > 0) {
    while ($row = $countriesResult->fetch_assoc()) {
        echo "<option value='" . $row['id_Країни'] . "'>" . $row['Країни'] . "</option>";
    }
} else {
    echo "<option value=''>No countries found</option>";
}


$mysqli->close();
?>