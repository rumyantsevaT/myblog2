<?php
session_start();
setcookie('login', 'admin');
echo $_SESSION['name'];

var_dump($_COOKIE);
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
	<!--	fontawesome-->
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
        <span class="navbar-text ml-lg-2"><button type="button" class="btn btn-outline-light">Logout</button></span>
    </div><!-- /.container -->
</nav>
<!--Первый экран-->
<div class="section section-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-sm-left text-lg-center">В настоящее время в мире насчитывается около <span>500 пород</span> собак</h2>
            </div>
        </div>
    </div>
</div>
<!--Второй экран-->
<div class="section py-5">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-4">
				<h1 class="d-inline">Админ панель</h1>
			</div>
			<div class="col-4 align-self-end text-right">
				<a class="btn btn-custom" href="create.php">Добавить породу</a>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card mb-3">
					<article class="card-group-item">
						<header class="card-header"><h5 class="title">Размер породы</h5></header>
						<div class="filter-content">
							<div class="list-group list-group-flush">
								<a href="#" class="list-group-item">1 <span class="float-right badge badge-secondary round">142</span> </a>
								<a href="#" class="list-group-item">2 <span class="float-right badge badge-secondary round">3</span>  </a>
								<a href="#" class="list-group-item">3<span class="float-right badge badge-secondary round">32</span>  </a>
								<a href="#" class="list-group-item">4<span class="float-right badge badge-secondary round">12</span>  </a>
								<a href="#" class="list-group-item">5<span class="float-right badge badge-secondary round">12</span>  </a>
							</div>  <!-- list-group .// -->
						</div>
					</article> <!-- card-group-item.// -->
				</div>
			</div>
			<!-- /.col-md-3 -->
			<div class="col-lg-9">
			<!--карточка -->
				<?php foreach ($breeds as $breed):?>
				<div class="card mb-4">
					<article class="itemlist">
						<div class="row row-sm">
							<aside class="col-sm-5">
								<div class="img-wrap">
									<img class="img-md" src="uploads/<?= $breed['image'];?>">
								</div>
							</aside> <!-- col.// -->
							<div class="col-sm-7">
								<div class="text-wrap">
									<h4 class="title"><?= $breed['title']?></h4>
									<p><?= $breed['content']?></p>
									<p class="rating-wrap my-3 text-muted">
										<span class="label-rating"><i class="far fa-clock mr-1"></i><?= $breed['date']?></span>
										<span class="label-rating">|</span>
										<span class="label-rating"><i class="far fa-user mr-1"></i>Татьяна</span>
									</p> <!-- rating-wrap.// -->
									<p>
										<a href="/details.php?id=<?= $breed['id'];?>" class="btn btn-custom"> Подробнее  </a>
										<a href="/edit.php?id=<?= $breed['id'];?>" class="btn btn-warning"> Редактировать </a>
										<a href="/delete.php?id=<?= $breed['id'];?>" class="btn btn-danger"> Удалить  </a>
									</p>
									<p><a href="#"><i class="fa fa-heart"></i> Добавить в избранные</a></p>
									<div class="border-top pt-3">
										<div class="price-wrap">
											<span class="h3 price"> $56 </span><del class="price-old"> $98</del>
										</div> <!-- info-price-detail // -->
										<p class="text-success">Free shipping</p>
									</div> <!-- action-wrap.// -->
								</div> <!-- text-wrap.// -->
							</div> <!-- col.// -->

						</div> <!-- row.// -->
					</article> <!-- itemlist.// -->
				</div> <!-- card.// -->
				<?php endforeach;?>
			</div>
			<!-- /.col-md-9 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<!-- /.section -->


<!--<div class="section">-->
<!--	<div class="container">-->
<!--		<div class="row mb-2">-->
<!--			<div class="col-12">-->
<!--				<div class="card flex-md-row mb-4 shadow-sm h-md-250">-->
<!--					<img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 350px; height: 350px;" src="images/items/bull-terrier-red500.jpg" data-holder-rendered="true">-->
<!--					<div class="card-body d-flex flex-column align-items-start">-->
<!--						<strong class="d-inline-block mb-2 text-primary">Категория</strong>-->
<!--						<h3 class="mb-0">-->
<!--							<a class="text-dark" href="#">Мини бультерьер</a>-->
<!--						</h3>-->
<!--						<div class="mb-1 text-muted">Nov 12</div>-->
<!--						<p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ea eos esse placeat vero? Corporis, fugiat, sunt. Assumenda at cumque delectus dolores impedit iste magnam quia quos veritatis. Architecto assumenda autem dicta eius eum eveniet in ipsum iusto nam nihil nobis numquam optio, praesentium provident qui sit velit vitae. Dolore!</p>-->
<!--						<a href="#">Continue reading</a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->



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
</html