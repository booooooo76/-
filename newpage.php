<?php
    require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


if ($mysqli->connect_error) {
    die('Помилка з\'єднання: ' . $mysqli->connect_error);
}

?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оформити тур</title>
    <style>
       body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    header {
        background-color: #66CDAA;
        padding: 15px;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    header img{
            height: 50px;
            width: 50px;
         }
    header nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }
    header nav li {
        margin-right: 20px;
        color: #fff; 
    }
    header nav a {
        color: inherit; / Спадкованість кольору лінків /
        text-decoration: none;
    }
    .book-form {
        max-width: 600px; 
        margin: 50px auto; 
        text-align: center;
    }
    .book-form label, .book-form input, .book-form select {
        display: block; 
        width: 100%; 
        padding: 10px;
        margin: 10px auto;
    }
    .book-form input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }
    / Додати інші стилі за потреби /
    </style>
</head>
<body>
    <header>
        <div><a href="index.php"><img src="logo.png" alt="Логотип"></a></div>
        <nav>
            <ul>
                <li><a href="index.php">Про нас</a></li>
                <li><a href="#book-tour">Оформити тур</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 style="text-align: center;">Замовлення</h1>
        <form action="process_form.php" method="post" class="book-form">

<label for="fullName">ПІБ</label>
        <input type="text" id="fullName" name="fullName" required>
        
        <label for="phone">Телефон*</label>
        <input type="tel" id="phone" name="phone" required>
        
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" required>
        
        <label for="departureDate">Дата відправлення</label>
        <input type="date" id="departureDate" name="departureDate">
        
        <label for="returnDate">Дата К</label>
        <input type="date" id="returnDate" name="returnDate">
        
        <label for="departureCity">Місто відправки</label>
        <input type="text" id="departureCity" name="departureCity">
        
        <label>Діти</label>
        <select name="children">
            <option value="no">Ні</option>
            <option value="yes">Так</option>
        </select>
        
        <label>Харчування</label>
        <select name="food">
            <option value="no">Ні</option>
            <option value="yes">Так</option>
        </select>
        
        <label for="countries">Країни</label>
        <select name="countries">
                <!-- PHP code to populate the countries dropdown -->
                <?php include 'get_countries.php'; ?>
            </select>
        
        
        
        <label for="hostel">Хостел</label>
        <select name="countries">
                <!-- PHP code to populate the countries dropdown -->
                <?php include 'get_хостел.php'; ?>
            </select>
        
        <label for="tour-types">Тип туру</label>
<select name="tour-types">
    <!-- PHP code to populate the tour types dropdown -->
    <?php include 'get_tour_types.php'; ?>
</select>

<label for="transport-options">Транспорт</label>
<select name="transport-options">
    <!-- PHP code to populate the transport options dropdown -->
    <?php include 'get_transport_options.php'; ?>
</select>




            
            

            

            <input type="submit" value="Підтвердити">

        </form>
    </main>

    <footer>
        <!-- Вміст футера -->
    </footer>
</body>
</html>