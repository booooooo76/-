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
    <title> Empire of Travel</title>
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
        nav {
            display: flex;

        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 20px;
            color: #933;
        }
      

        section.hero {
            height: 500px;
            width: 100%;
            background-image: url('https://wide-w.com/wp-content/uploads/2019/01/gora-jeverest.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color:      #ffffff;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        section#about {
            border: 2px solid #333;
            background-color: #00FA9A;
            padding: 20px;
            margin: 20px 0;
            overflow: hidden;
        }

        section#about img {
            float: left;
            margin-right: 20px;
            max-width: 300px;
        }

        section#about p {
            margin: 0 0 20px 0;
        }

        section#best-tour {
            text-align: center;
        }

        section#best-tour h2 {
            margin-bottom: 20px;
        }

        section#best-tour .feature {
            display: inline-block;
            margin: 0 20px 20px 0;
            border: 10px solid #F0E68C;
            padding: 10px;
            width: calc((100% - 60px) / 3);
            box-sizing: border-box;
        }

        section#best-tour img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

       .hottourscontainer {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap; 
  align-items: center;
  justify-content: space-around;
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);

}

.hottourscontainer img {
  max-width: 200px;
  margin-right: 20px;
  border-radius: 10px;
  margin-bottom: 20px; 
}

.hottoursinfo {
  flex-grow: 1;
  width: 70%; 
}

.tourtitle {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.tourdescription {
  font-size: 16px;
  margin-bottom: 10px;
}

.tourprice {
  font-size: 18px;
  font-weight: bold;
  color: green;
  border: 2px solid #eee;
  padding: 10px;
  display: inline-block;
}

.hottourstitle {
  text-align: center;
  font-size: 32px;
  margin-bottom: 40px;
}


        section#route-example {
         
          
            text-align: center;
          background-color: 	#FFF8DC;
        }

        section#route-example .route-block {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 40px;
          border: 2px solid 	#DCDCDC; 
    padding: 10px; 
    margin-bottom: 10px; 
        }

        section#route-example .route-block img{
           width: 500px;
            height: 400px;
      }
        section#route-example .route-block p {
          
            width: 48%; 
            margin: 0 2%; 
            box-sizing: border-box;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
       
      #book-tour {
      	background-color: #F0FFF0;
  text-align: center;
  padding: 50px 0;  
}

.book-button-container {
  display: inline-block; 
}

.book-button {
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

.book-button:hover {
  background-color: #45a049;
}
      #testimonials {
    text-align: center;
    padding: 50px;
}

.testimonial-container {
    display: flex;
    justify-content: space-around; 
    flex-wrap: wrap;
    gap: 20px;
}

.testimonial {
    background-color: #ffffff;
    border: 1px solid #eaeaea;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    flex-basis: calc(30% - 40px); 
    margin: 10px;
    flex-grow: 1;
}

.testimonial blockquote {
    font-style: italic;
    color: #555;
}

.testimonial-author, .tour-date {
    font-weight: bold;
    font-size: 0.9em;
    color: #333;
    text-align: right;
    margin-top: 15px;
}
#map {
    margin: 20px;
    padding: 20px;
}
#map h2 {
    text-align: center;
    margin-bottom: 20px;
}
#map iframe {
    width: 100%; 
}

#contacts {
  background-color: #f8f8f8;
  padding: 50px 0;
}

#contacts .container {
  max-width: 1200px; 
  margin: 0 auto; 
  padding: 0 15px; 
}

#contacts h2 {
  text-align: center; 
  margin-bottom: 15px; 

#contacts p {
  text-align: center; 
  margin: 10px 0; 
  font-size: 1rem; 
}

#contacts a {
  color: #007bff; 
  text-decoration: none; 
}

#contacts a:hover {
  text-decoration: underline; 
}

      footer{
       height: 25px;
      }

 













    </style>
</head>

<body>

    <header>
        <div>
            <img src="logo.png" alt="Логотип">
        </div>
        <nav>
            <ul>
                <li><a href="#about">Про нас</a></li>
                <li><a href="newpage.php">Оформити тур</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Ласкаво просимо в нашу туристичну компанію<br>
          Тур від агентства " <b><i> Empire of Travel".</i></b> </h1>
    </section>

    <section id="about">
        <img src="https://seo-evolution.com.ua/imgfly/public/Ej5uSGigkkhfGF9Sq2yBC9xGtsPNaiiNQ7uy0W4i.jpg?h=600" alt="Про нас">
        <p>
            <h1>Фантастична подорож для вас!</h1><br>
        </p>
        <p>Чому б не відсвяткувати свою наступну літню відпустку в Європі! Відвідайте замки, парки, пляжі під час цього чудового туру... У старій Європі є безліч меморіалів і музеїв з античною архітектурою. Долина Луари відома на весь світ своїми замками,
            Рим – автентичною архітектурою, а Амальфі чудово підходить для пляжного відпочинку.</p>

        <p>Південь Франції та більша частина сусідньої Італії є майданчиками для захоплення. Це зони, які здавна активізували почуття розкоші та поблажливості. Тепер у вас є чудова нагода випробувати все на собі.</p>
    </section>

    <section id="best-tour">
        <h2>Чому наш тур найкращий?</h2>
        <div class="feature">
            <img src="1.png" alt="Особливість 1">
            <h2>
                <p>Наша увага зосереджена на вас</p>
            </h2>
            <p>Наші г

іди та водії з радістю зустрінуть Вас,
                детально дадуть відповідь на всі запитання та поділяться з Вами своїми знаннями.</p>
        </div>
        <div class="feature">
            <img src="2.png" alt="Особливість 2">
            <h2>
                <p>Розстеліться і розслабтеся</p>
            </h2>
            <p>Відвідайте наші розкішні пляжі, розтягніться на шезлонгах і насолодіться незабутніми враженнями!</p>
        </div>
        <div class="feature">
            <img src="3.png" alt="Особливість 3">
            <h2>
                <p>Швидкі реєстрації</p>
            </h2>
            <p>Процес заселення та виїзду в кожному готелі тепер більш швидкий і приємний. Реєстрація займає кілька хвилин.</p>
        </div>
        <div class="feature">
            <img src="4.png" alt="Особливість 4">
            <h2>
                <p>Особистий досвід крупним планом</p>
            </h2>
            <p>Дослідіть кожну пам'ятку уважно та особисто. У вас буде достатньо часу, щоб задати питання про те, що вас цікавить.</p>
        </div>
        <div class="feature">
            <img src="5.png" alt="Особливість 5">
            <h2>
                <p>Цінуйте кожну мить</p>
            </h2>
            <p>
                Цінуйте кожну мить
                Насолоджуйтесь кожною миттю відпустки! Скуштуйте автентичну французьку кухню та робіть фотографії, де б ви не були, щоб зберегти свої спогади.</p>
        </div>
        <div class="feature">
            <img src="6.png" alt="Особливість 6">
            <h2>
                <p>Розслаблюючий темп</p>
            </h2>
            <p>Досліджуйте Європу у своєму власному темпі. Зрештою,
                особливо нікому не подобається бути частиною стада
                у вашій довгоочікуваній відпустці.</p>
        </div>
    </section>

   

    <section id="route-example">
      <h2>Приклад маршруту</h2>
        <div class="route-block">
            <img src="https://res2.weblium.site/res/weblium/58d4b086c50d470001caaea8_optimized_1560.jpeg.webp" alt="Маршрут 1">
          <p><b>Прибуття в Париж, Франція</b><Br>

Після прибуття в аеропорт Парижа вас зустріне наш водій і відвезе до одного з наших готелів з
              найвищим рейтингом. 
              Не забувайте, що ваш виліт буде з Ніцци. Реєстрація та отримання квитка на автобус.</p>
        </div>
        <div class="route-block">
            <p><b>Від Парижа до долини Луари</b><Br>

Цього дня ви здійсните екскурсію 3 найпопулярнішими замками, розташованими в долині Луари. 
              Королівський замок Шамбор є найбільш вражаючим, масивним і відвідуваним.</p>
            <img src="https://res2.weblium.site/res/5cefbc481583c10023c7be47/5cfe420deb3a7e0023924973_optimized_1560.webp" alt="Маршрут 2">
        </div>
        <div class="route-block">
            <img src="https://res2.weblium.site/res/weblium/58d4b091c50d470001caaeaa_optimized_1560.jpeg.webp" alt="Маршрут 3">
            <p><b>Рим і узбережжя Амальфі</b><Br>

Італія – це архітектура, історія, чудова кухня та вражаючі пляжі. Ми подорожуватимемо через Рим і
              Венецію до узбережжя Амальфі з 
              чудовими можливостями для прийняття сонячних ванн і купання в найчистішому
              Середземному морі.</p>
        </div>
    </section>
  




<h2 class="hottourstitle">Гарячі тури</h2> 

<div class="hottourscontainer">
  <img src="https://static.uvidpustku.com/wp-content/uploads/2019/03/sumit-chinchane-1434229-unsplash.jpg" alt="Тур">
  <div class="hottoursinfo">
    <div class="tourtitle">Екзотичне пригода на Балі</div>
    <div class="tourdescription">Відпочинок на східному раї Балі: пляжі, смачна кухня, відвідання храмів і джунглів.</div>
    <div class="tourprice">Ціна: 20 000 грн</div>
  </div>

  <img src="http://mklub.com.ua/wp-content/uploads/2021/08/00.jpg" alt="Тур">
  <div class="hottoursinfo">
    <div class="tourtitle">Італійські шедеври</div>
    <div class="tourdescription">Відвідайте найкрасивіші місця Італії: Рим, Флоренція, Венеція. Історія, мистецтво, культура і смачна їжа.</div>
    <div class="tourprice">Ціна: 25 345 грн</div>
  </div>

  <img src="https://travel-tours.com.ua/wp-content/uploads/2016/03/24.jpg" alt="Тур">
  <div class="hottoursinfo">
    <div class="tourtitle">Активний відпочинок у Швейцарії</div>
    <div class="tourdescription">Гірські походи, катання на лижах та емоційні краєвиди в Швейцарії. Для любителів активного відпочинку.</div>
    <div class="tourprice">Ціна: 18 300 грн</div>
  </div>

  <img src="https://fly-joy.com/wp-content/uploads/2023/10/e67e736d38811de5b2711b405c0fb516_edited-1024x614.jpg" alt="Тур">
  <div class="hottoursinfo">
    <div class="tourtitle">Спокій та релакс на Мальдівах</div>
    <div class="tourdescription">Неймовірні коралові рифи, білосніжні пляжі та затишні бунгало на водах океану.</div>
    <div class="tourprice">Ціна: 22 100 грн</div>
  </div>

  <img src="https://1news.com.ua/wp-content/uploads/2021/10/1609774349.jpg" alt="Тур">
  <div class="hottoursinfo">
    <div class="tourtitle">Гастрономічний тур по Франції</div>
    <div class="tourdescription">Відвідайте найвідоміші французькі ресторани, скуштуйте виноградні вина та насолоджуйтеся вишуканою кухнею.</div>
    <div class="tourprice">Ціна: 28 300 грн</div>
  </div>
<?php
     require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');

    // SQL-запит для отримання всіх турів
    $sql = "SELECT * FROM тури_сайт";
    $result = $mysqli->query($sql);

    // Виведення HTML-коду для кожного туру
    while ($row = $result->fetch_assoc()) {
        echo "<div class='hottourscontainer'>";
        echo "<img src='" . $row['Зображення'] . "' alt='" . $row['Назва'] . "'>";
        echo "<div class='hottoursinfo'>";
        echo "<div class='tourtitle'>" . $row['Назва'] . "</div>";
        echo "<div class='tourdescription'>" . $row['Опис'] . "</div>";
        echo "<div class='tourprice'>Ціна: " . $row['Ціна'] . " грн</div>";
        echo "</div>";
        echo "</div>";
    }

    // Закриття результату та з'єднання з базою даних
    $result->close();
    $mysqli->close();
    ?>
 
</div>






<section id="book-tour">
  <div class="book-button-container">
    <a href="newpage.php" class="book-button">Оформити тур</a>
  </div>
</section>
  
 <section id="testimonials">
    <h2>Відгуки</h2>
    <div class="testimonial-container">
        <div class="testimonial">
            <blockquote>
               
«Ми проводили екскурсію з нашим гідом Хелен Стоун. Вона була справжнім професіоналом, і нам дуже пощастило, що ми були з нею весь тур. Вона розповіла нам багато цікавого про історію Парижа та Риму. Хелен допомогла щоб замовити вечерю з чоловіком в одному з найпопулярніших ресторанів. Дякуємо за чудовий відпочинок!"
            </blockquote>
            <p class="testimonial-author">Дженніфер - Керні, штат Небраска</p>
            <p class="tour-date">Тур: 03.06.24</p>
        </div>
       
        <div class="testimonial">
            <blockquote>
                
"Подорож виявилася навіть більш захоплюючою, ніж я очікувала. Ми з чоловіком завжди хотіли відвідати Париж, найромантичніше місце в світі. Дякую за продуманий план нашої відпустки. Все було просто ідеально - починаючи з екскурсій. справді хороше харчування та помешкання. Усі туристичні агенти дуже обізнані та привітні. Велике спасибі!"




            </blockquote>
            <p class="testimonial-author">Аманда-Вашингтон, округ Колумбія</p>
            <p class="tour-date">Тур: 14.05.24</p>
        </div>
        <div class="testimonial">
            <blockquote>
                «Мені найбільше запам’яталася поїздка до Парижа з Хелен. Вона зробила все можливе, щоб виправдати всі мої очікування. Я побачив усе, що планував, і ще один плюс: у мене було багато часу, щоб відпочити та відпочити біля басейну. Дуже рекомендую цю туристичну агенцію всім, хто потребує ідеально спланованої відпустки. Велике спасибі Хелен!"




            </blockquote>
            <p class="testimonial-author">Алекс-Дріпінг-Спрінгс, Техас</p>
            <p class="tour-date">Тур: 05.12.24</p>
</div>
            <div class="testimonial">
            <blockquote>
               
"Наша подорож до Парижа перевершила всі очікування. Від романтичних вуличок до неперевершених видів, ми насолоджувалися кожним моментом. План відпустки був докладно продуманий, екскурсії захоплюючі, а гастрономічний досвід просто неймовірний. Велике спасибі за ідеально проведений відпочинок!"


            </blockquote>
            <p class="testimonial-author">Амелія, Сіетл, Вашингтон</p>
            <p class="tour-date">Тур: 05.07.24</p>
        </div>

        <div class="testimonial">
            <blockquote>
               
"Ми завжди мріяли відвідати Париж, і наша подорож перевершила усі наші фантазії. Від кожної екскурсії до вражаючих пам'яток - все було вражаюче. Організація відпустки була ідеальною, від привітних агентів до вишуканого харчування. Дякуємо за незабутні миті!"


            </blockquote>
            <p class="testimonial-author">Наталія і Том, Вашингтон, D.C.</p>
            <p class="tour-date">Тур: 08.02.24</p>
        </div>

        <div class="testimonial">
            <blockquote>
               
"Наша подорож до Парижа виявилася справжнім райом для нас. Романтичні прогулянки по вуличках, чарівні види з Ейфелевої вежі та вражаючі екскурсії - все перевищило наші очікування. Тур був ідеально спланований, а агенти виявилися чудовими провідниками. Дякуємо за найкращий відпочинок у Парижі!"


            </blockquote>
            <p class="testimonial-author">Девід та Емма, Вашингтон, округ Колумбія</p>
            <p class="tour-date">Тур: 33.07.24</p>
        </div>
       <?php
            require_once 'include/db.php';
    $mysqli = new mysqli('localhost', 'root', '17020575', 'тур');


            // SQL-запит для отримання відгуків
            $sql = "SELECT * FROM Відгуки";
            $result = $mysqli->query($sql);

            // Виведення HTML-коду для кожного відгуку
            while ($row = $result->fetch_assoc()) {
                echo "<div class='testimonial'>";
                echo "<blockquote>" . $row['Відгук'] . "</blockquote>";
                echo "<p class='testimonial-author'>" . $row['Автор'] . "</p>";
                echo "<p class='tour-date'>Тур: " . $row['Дата туру'] . "</p>";
                echo "</div>";
            }

            // Закриття результату та з'єднання з базою даних
            $result->close();
            $mysqli->close();
            ?>
    </div>
</section>

<section id="map">
    <h2>Знайдіть нас на карті</h2>
   
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.687887451887!2d13.377704150979676!3d52.51627494601582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a851e538dfd437%3A0xcbf4a47b0f80c328!2sBrandenburg Gate!5e0!3m2!1sen!2sde!4v1649677722857!5m2!1sen!2sde"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  
</section>

  <section id="contacts">
  <div class="container">
    <h2>Контакти</h2>
    <p><strong>Адреса:</strong> вул. Велика, 4, м. Київ, Україна</p>
    <p><strong>Телефон:</strong> <a href="tel:+380ххххххх">+380 ххх ххх ххх</a></p>
    <p><strong>Електронна пошта:</strong> <a href="zagrebenukbogdan777@gmail.com
">zagrebenukbogdan777@gmail.com
</a></p>
  </div>
</section>
  
    <footer>
        <p>&copy; 2023 Empire of Travel. Усі права захищені.</p>
    </footer>



</body>

</html>


