<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Copmatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <title>Sport Island</title>
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3
  px-md-4 mb-3 border-bottom shadow-sm">
  <a class="mr-md-auto font-weight-normal" href="index.php">
  <img class="#" src="img\SportIsland.png" height="75" width="100">
  </a>
    <nav class="my-2 my-md-0 mr-md-5 h6">
      <a class="p-2 d-none d-md-inline-block" href="sport.php">Спорт</a>
      <a class="p-2 d-none d-md-inline-block" href="fitness.php">Фитнес</a>
      <a class="p-2 d-none d-md-inline-block" href="trip.php">Туризм</a>
      <a class="p-2 d-none d-md-inline-block" href="cart.php">Корзина</a>
    </nav>
          <a class="btn btn-outline-primary h6" href="login.php">Войти</a>
        </div>
        <div center>

<div class="container mt-5">
      <div class="intro">
    <h3 class="mb-5 text-center">Спорт (Тренажеры)</h3>
</div>


<div class = "d-flex flex-wrap">     
     <?php
     for($i = 0; $i < 3; $i++):
    ?>
      <div class="col">
        <div class="card mb-3 rounded-4 shadow-sm border-primary">
          <div class="card-header py-2 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Пример товара</h4>
          </div>
          <div class="card-body">
          	<img src="img/no_image.jpg" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">$99<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Пример краткого описания товара</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Добавить в корзину</button>
          </div>
        </div>
      </div>
      <?php endfor; ?>
  </div>

  <div class = "d-flex flex-wrap">     
     <?php
     for($i = 0; $i < 3; $i++):
    ?>
      <div class="col">
        <div class="card mb-3 rounded-4 shadow-sm border-primary">
          <div class="card-header py-2 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Пример товара</h4>
          </div>
          <div class="card-body">
          	<img src="img/no_image.jpg" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">$99<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Пример краткого описания товара</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Добавить в корзину</button>
          </div>
        </div>
      </div>
      <?php endfor; ?>
  </div>

  <div class = "d-flex flex-wrap">     
     <?php
     for($i = 0; $i < 3; $i++):
    ?>
      <div class="col">
        <div class="card mb-3 rounded-4 shadow-sm border-primary">
          <div class="card-header py-2 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Пример товара</h4>
          </div>
          <div class="card-body">
          	<img src="img/no_image.jpg" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">$99<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Пример краткого описания товара</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Добавить в корзину</button>
          </div>
        </div>
      </div>
      <?php endfor; ?>
  </div>

  <div class = "d-flex flex-wrap">     
     <?php
     for($i = 0; $i < 3; $i++):
    ?>
      <div class="col">
        <div class="card mb-3 rounded-4 shadow-sm border-primary">
          <div class="card-header py-2 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Пример товара</h4>
          </div>
          <div class="card-body">
          	<img src="img/no_image.jpg" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">$99<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Пример краткого описания товара</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Добавить в корзину</button>
          </div>
        </div>
      </div>
      <?php endfor; ?>
  </div>

<footer class="bd-footer p-3 p-md-2 mt-2 bg-light text-center text-sm-start">
<a href="#"   class="text-center">Справка</a>

<a class="ru-language">
    <img src="img\Russia.png" href="#" >
  </a>
<a class="en-language">
  <img src="img\United-Kingdom.png" href="#">

</body>
</html>