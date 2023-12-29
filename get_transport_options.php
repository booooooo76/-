
<?php

require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


$transportQuery = "SELECT * FROM транспорт;";
$transportResult = $mysqli->query($transportQuery);


    if ($transportResult->num_rows > 0) {
        while ($row = $transportResult->fetch_assoc()) {
            echo "<option value='" . $row['id_Транспорт'] . "'>" . $row['Транспорт'] . "</option>";
        }
    } else {
        echo "<option value=''>Транспорт не знайдено</option>";
    }



$mysqli->close();
?>