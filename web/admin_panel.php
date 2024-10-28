<!-- Основная панель редактирования и добавления текста для статьи -->
<!-- Тут  можно указать название статьи, добавить текст и автора  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author Panel</title>
</head>
<body>
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
<?php
   require_once 'config/connect.php';
   $stat = mysqli_query($connect, "SELECT * FROM `statii`");
   $stat =  mysqli_fetch_all($stat);   
?>

<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statii</title>
</head>
<body>
<style>
    body {
      background-color: #FFF8DC;
    }
    h6 {
      color: black;
      font-family: Verdana, sans-serif;

    }
    p {
      color: black;
      font-family: Verdana, sans-serif;

    }
</style>
    <?php
    foreach($stat as $st){
        ?>
    <h1><?= $st[1]; ?></h1>
    <p><?= $st[2]; ?></p>
    <h1><?= 'Автор: ' . $st[3]; ?></h1>
    <br>
    <?php
    }
?>
</body>
</html>