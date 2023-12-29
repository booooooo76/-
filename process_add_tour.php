<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');

    $tourName = $_POST['tourName'];
    $tourDescription = $_POST['tourDescription'];
    $tourPrice = $_POST['tourPrice'];

   
    $targetDir = "images/"; // Створіть цю папку в кореневій директорії вашого проекту
    $targetFile = $targetDir . basename($_FILES["tourImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

   
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["tourImage"]["tmp_name"]);
        if($check !== false) {
            echo "Файл є - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Файл не є зображенням.";
            $uploadOk = 0;
        }
    }

   
   if (file_exists($targetFile)) {
    $newFileName = time() . '_' . basename($_FILES["tourImage"]["name"]);
    $targetFile = $targetDir . $newFileName;
    echo " Збережено як $newFileName.<br>";
}


if ($_FILES["tourImage"]["size"] > 500000) {
    echo "Вибачте, ваш файл занадто великий.";
    $uploadOk = 0;
}

/
if ($uploadOk == 0) {
    echo "Вибачте, ваш файл не був завантажений.";
} else {
    if (move_uploaded_file($_FILES["tourImage"]["tmp_name"], $targetFile)) {
        echo "Тур успішно додано до бази даних з завантаженим зображенням.";
    } else {
        echo "Виникла помилка при завантаженні файлу.";
    }
}

   
    $sql = "INSERT INTO тури_сайт (Назва, Опис, Ціна, Зображення) VALUES ('$tourName', '$tourDescription', '$tourPrice', '$targetFile')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Тур успішно додано до бази даних";
    } else {
        echo "Помилка: " . $sql . "<br>" . $mysqli->error;
    }

  
    $mysqli->close();
}
?>
