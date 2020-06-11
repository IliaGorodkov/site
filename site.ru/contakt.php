<!DOCTYPE html>
<html lang="ru">
<head>
<?php require "blocks/header.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Контакты</title>
</head>
<body>
<div class="d-flex flex-wrap">
    <div class="card mb-5 shadow-sm">
     <div class="card-header">
      <h4 class="my-0 font-weight-normal">Создатель Илья Городков</h4>
     </div>
    <div class="card-body">
         <img class='container' src= " img/<?php  echo ($i = 10) ?>.jpg" class="img-thumbnail" >
       <ul class="list-unstyled mt-3 mb-4">
         <li>Красивый</li>
         <li>Клевый</li>
         <li>И просто нормальный парень</li>
         <li>Задавайте вопросы Email iliabox1@mail.ru</li>
       </ul>
    </div>
   </div>
</body>

<?php require "blocks/footer.php" ?>
