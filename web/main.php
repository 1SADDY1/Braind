<!-- Главная страница, где содрежатся анонсы и ссылки на статьи -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <style>
       body {
        background-color: #FFF8DC;
    }
    ul,h1 {
      color: black;
      font-family: Verdana, sans-serif;

    }
    </style>
    <h1 style="border: 3px solid gray; border-radius: 10px; color: DarkGreen">Новостной портал о культуре и политике</h1>
    <div class="spisok" style="border: 3px solid gray; border-radius: 10px; color: DarkGreen">
        <ul>
            <!-- Список со страницами, на которые можно перейти -->
            <li><a href="main.php">Главная</a></li>
            <li><a href="http://localhost/web/states.php">Новости</a></li>
        </ul>

    </div>
    <hr style="border: 5px solid black; border-radius: 10px;">
    <?php 
    // Подключаем файл anonce.php для отображения анонсов
    include 'anonces/anonce.php'; 
    ?>
    <hr>
</body>
</html>

