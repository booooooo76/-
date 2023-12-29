<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Адмін - Додавання турів</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h2 {
      color: #333; text-align: center;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin: 10px 0 5px;
      color: #333;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"],
    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2> Додавання турів</h2>

  <form action="process_add_tour.php" method="post" enctype="multipart/form-data">
    <label for="tourName">Назва туру:</label>
    <input type="text" id="tourName" name="tourName" required><br>

    <label for="tourDescription">Опис туру:</label>
    <textarea id="tourDescription" name="tourDescription" required></textarea><br>

    <label for="tourPrice">Ціна:</label>
    <input type="text" id="tourPrice" name="tourPrice" required><br>

    <label for="tourImage">Зображення туру:</label>
    <input type="file" id="tourImage" name="tourImage" accept="image/*" required><br>

    <input type="submit" value="Додати тур">
  </form>


  <h2>Додавання відгуку</h2>
    <form action="process_add_testimonial.php" method="post">
        <label for="testimonial">Відгук:</label>
        <textarea name="testimonial" id="testimonial" rows="4" required></textarea><br>
        
        <label for="author">Автор:</label>
        <input type="text" name="author" id="author" required><br>

        <label for="tour-date">Дата туру:</label>
        <input type="text" name="tour-date" id="tour-date" required><br>

        <input type="submit" value="Додати відгук">
    </form>
 <button type="button"><a href="index.php" >Вихід</a></button>
</body>
</html>
