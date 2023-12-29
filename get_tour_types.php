<?php

require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


$tourTypesQuery = "SELECT * FROM видтур;";
$tourTypesResult = $mysqli->query($tourTypesQuery);


    if ($tourTypesResult->num_rows > 0) {
        while ($row = $tourTypesResult->fetch_assoc()) {
            echo "<option value='" . $row['id_Вид тур'] . "'>" . $row['Вид тур'] . "</option>";
        }
    } else {
        echo "<option value=''>Типи турів не знайдено</option>";
    }




$mysqli->close();
?>