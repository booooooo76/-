<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


    
    $testimonial = $_POST['testimonial'];
    $author = $_POST['author'];
    $tourDate = $_POST['tour-date'];

    
    $sql = "INSERT INTO Відгуки (`Відгук`, `Автор`, `Дата туру`) VALUES ('$testimonial', '$author', '$tourDate')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Відгук успішно додано";
    } else {
        echo "Помилка: " . $sql . "<br>" . $mysqli->error;
    }

    
    $mysqli->close();
} else {
    header('Location: admin.php');
    exit();
}
?>