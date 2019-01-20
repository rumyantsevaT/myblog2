<?php
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
$statement = $pdo->prepare("SELECT * FROM breeds WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$breed = $statement->fetch(PDO::FETCH_ASSOC);
//var_dump($breed['content']);
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
	
	<!--    Custom style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<!--header navbar-->
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
		<span class="navbar-text ml-lg-2"><button type="button" class="btn btn-outline-light">Регистрация</button></span>
	</div><!-- /.container -->
</nav>
<div class="section py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Редактировать породу собаки</h1>
				<form action="update.php?id=<?= $breed['id'];?>" method="POST">
<!--					<input type="text" name="id" value="--><?//= $breed['id'];?><!--">-->
					<div class="form-group">
						<label>Название породы</label>
						<input name="title" type="text" class="form-control" value="<?= $breed['title'];?>">
					</div>
					<div class="form-group">
						<label>Описание</label>
						<textarea name="content" class="form-control" placeholder="Описание породы"><?= $breed['content']?></textarea>
					</div>
<!--					<div class="input-group mb-3">-->
<!--						<div class="custom-file">-->
<!--							<input type="file" class="custom-file-input" id="inputGroupFile02">-->
<!--							<label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Добавить изображение</label>-->
<!--						</div>-->
<!--						<div class="input-group-append">-->
<!--							<span class="input-group-text" id="inputGroupFileAddon02">Загрузить</span>-->
<!--						</div>-->
<!--					</div>-->
					<button type="submit" class="btn btn-warning">Подтвердить изменение</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.section -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!--footer-->
<footer class="footer">
	<div class="container">
		<hr class="my-4">
		<div class="row">
			<div class="col-3">Блок футера 1</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 2</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 3</div>
			<!-- /.col-3 -->
			<div class="col-3">Блок футера 4</div>
			<!-- /.col-3 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</footer>
<!-- /.footer -->
</body>
</html>