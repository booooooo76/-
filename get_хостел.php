<?php

require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


$tourTypesQuery = "SELECT * FROM хостел;";
$tourTypesResult = $mysqli->query($tourTypesQuery);


    if ($tourTypesResult->num_rows > 0) {
        while ($row = $tourTypesResult->fetch_assoc()) {
            echo "<option value='" . $row['id_Хостел'] . "'>" . $row['Назва'] . "</option>";
        }
    } else {
        echo "<option value=''>Хостел не знайдено</option>";
    }




$mysqli->close();
?>