<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Сайт</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<div class="container mt-5">
  <h3 class ="mb-5">Наши статьи</h3>

  <div class="d-flex flex-wrap">
    <?php
     for ($i = 0; $i < 2;$i++):
    ?>
    <div class="card mb-5 shadow-sm">
     <div class="card-header">
      <h4 class="my-0 font-weight-normal">Ты Лучший!</h4>
     </div>
    <div class="card-body">
         <img class='container' src= " img/<?php  echo ($i + 1) ?>.jpg" class="img-thumbnail" >
       <ul class="list-unstyled mt-3 mb-4">
         <li>Ты Молодец</li>
         <li>Красава</li>
         <li>Клевый</li>
         <li>И просто нормальный парень</li>
       </ul>
       <button type="button" class="btn btn-lg btn-block btn-outline-primary">Узнать больше</button>
    </div>
   </div>
  <?php endfor;?>
</div>
</div>
<?php require "blocks/footer.php"?>
</body>
</html>