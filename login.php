<?php
session_start();
setcookie("login", "admin");
?>

<!doctype html>
<html lang="ru">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Мой блог за 30 дней</title>

	<!-- Bootstrap CSS 4.1.3-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Custom style-->
	<link rel="stylesheet" href="css/style.css">
	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-nav-custom sticky-top">
	<div class="container">
		<a class="navbar-brand navbar-brand-custom" href="/">Rumyantseva-blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Все породы собак<span class="sr-only">(current)</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="create.php">Добавить породу</a>
						<a class="dropdown-item" href="edit.php">Редактировать породу</a>
						<a class="dropdown-item" href="update.php">Обновить породу</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="delete.php">Удалить породу</a>
					</div>
				</li>
			</ul>
		</div>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Поиск породы" aria-label="Search">
			<button class="btn btn-outline-success btn-outline-custom my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		</form>
		<span class="navbar-text ml-lg-2"><button type="button" class="btn btn-outline-light"><a href="login.php">Регистрация</a></button></span>
	</div><!-- /.container -->
</nav>
<div class="section section-main">
	<div class="container">
		<div class="form-wrap">
			<h1>Вход в личный кабинет</h1>
			<form class="m-auto" method="post">
				<div class="form-group">
					<label for="inputName">Имя</label>
					<input type="text" name="name" class="form-control" id="inputName" placeholder="Как к вам обращаться?">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email </label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите Ваш email">
					<small id="emailHelp" class="form-text text-muted">Мы не передаем вашу личную информацию третьим лицам.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль до 8 символов">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-custom">Login</button>
			</form>
			<p class="mt-3"><a href="#" class="forgot-pass">Забыли пароль?</a><small>Нет аккаунта? </small><a href="register.html" class="signup">Регистрация</a></p>
		</div>
		<!-- /.form-wrap -->
	</div>
<!-- /.container -->
	</div>
	<!--/.section .section-main-->
</body>
</html>
