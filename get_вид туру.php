<?php

require_once 'include/db.php';
$mysqli = new mysqli('localhost', 'root', '17020575', 'тур');
$TypetourQuery = "SELECT * FROM видтур;";
$TypetourResult = $mysqli->query($TypetourQuery);

if ($TypetourResult->num_rows > 0) {
    while ($row = $TypetourResult->fetch_assoc()) {
        echo "<option value='" . $row['id_Вид тур'] . "'>" . $row['Вид тур'] . "</option>";
    }
} else {
    echo "<option value=''>No Typetour found</option>";
}


$mysqli->close();
?>