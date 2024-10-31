<!-- Основная панель редактирования и добавления текста для статьи -->
<!-- Тут  можно указать название статьи, добавить текст и автора  -->
<!-- Данные из этой панели будут  появляться в анонсе на главной странице с анонсами и на странице со статьями -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author Panel</title>
</head>
<body>
  <!-- Устанавливаем стили -->
  <style>
    body {
      background-color: #FFF8DC;
    }
    h1, h2 {
      color: black;
      font-family: Verdana, sans-serif;

    }
    p {
      color: black;
      font-family: Verdana, sans-serif;

    }
  </style>
    <h1>Панель авторов статей</h1>
    <p>Здесь происходит добавление статей и их анонсов</p>
  <h2>Панель для добавления и редактирования текста</h2>
  <!-- Форма для вставки информации в форму и отправку данных методом post -->
  <form action="vendor/zapros.php" method="post">
    <p>Название статьи:</p>
    <input type="text" name="title">
    <p>Текст статьи:</p>
    <textarea name="text"></textarea>
    <p>Автор:</p>
    <input type="text" name="author">
    <br>
    <button type="submit">Отправить</button>
  </form>
</body>
</html>


