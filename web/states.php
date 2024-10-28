<!-- Файл анонсов статей -->
<!-- После редактирования и добавления здесь будет появляться информация -->

<!-- блок кода php делает запрос к БД "statii" для получения информации -->
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