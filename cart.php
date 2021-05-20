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


	<div class="intro">
    <h3 class="mb-5 text-center">Корзина</h3>
</div>

	<?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) !=0 ) : ?>
	
		<ul>
			<?php foreach( $_SESSION['cart_list'] as $course ) : ?>

				<li>
					<?php echo $course['title']; ?> | 
					<?php echo $course['price']; ?> грн. | 
					<a href="cart.php?delete_id=<?php echo $course['id'];?>">Х</a>
				</li>

			<?php endforeach; ?>
		</ul>
	
	<?php else : ?>

		<p class="mb-5 text-center">
			Ваша корзина пуста
		</p>

	<?php endif; ?>


	<a href="index.php">Продолжить покупки</a>
	<br>
	<a href="order.php">Оформить заказ</a>

	<footer class="bd-footer p-3 p-md-2 mt-2 bg-light text-center text-sm-start">
<a href="#"   class="text-center">Справка</a>

<a class="ru-language">
    <img src="img\Russia.png" href="#" >
  </a>
<a class="en-language">
  <img src="img\United-Kingdom.png" href="#">

	
</body>
</html>

<?php
session_start();


require_once "functions.php";


if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list']) ) {
	foreach ($_SESSION['cart_list'] as $key => $value) {
		if ( $value['id'] == $_GET['delete_id'] ) {
			unset($_SESSION['cart_list'][$key]);
		}		
	}
}


if ( isset($_GET['course_id']) && !empty($_GET['course_id']) ) {

	$current_added_course = get_course_by_id($_GET['course_id']);

	// ...
	if ( !empty($current_added_course) ) {

		if ( !isset($_SESSION['cart_list'])) {
			$_SESSION['cart_list'][] = $current_added_course;
		}


		$course_check = false;

		if ( isset($_SESSION['cart_list']) ) {
			foreach ($_SESSION['cart_list'] as $value) {
				if ( $value['id'] == $current_added_course['id'] ) {
					$course_check = true;
				}
			}
		}


		if ( !$course_check ) {
			$_SESSION['cart_list'][] = $current_added_course;
		}

	} else {
		header("Location: 404.php");
	}
	
}

// var_dump($_SESSION);




?>
