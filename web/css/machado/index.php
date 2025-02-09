<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Machado&#38;Bonatto</title>
		<meta name="author" content="DOA Comm - http://doacomm.com.br/">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<section id="banner">
			<div class="col-md-3">
				<img class="img-responsive" draggable="false" src="images/logo.png" alt="Logo - Machado&Bonatto">
			</div>
			<div class="col-md-9">
				<img draggable="false" style="width: 100%;" src="images/home/bannerImg.jpg" alt="Equipe">
			</div>
			
		</section>

		<header id="headerHome">
			<div class="container-fluid">
				<img class="hidden" src="images/logoHeader.jpg" alt="Logo - Machado&Bonatto">
			</div>
			<div class="container">
				<div id="mobileMenu" class="pull-right">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<nav>
					<ul>
						<li><a href="index.php"><img src="images/logoMenu.jpg" alt="Logo"></a></li>
						<li><a href="equipe.php">NOSSA EQUIPE</a></li>
						<li><a href="diferenciais.php">DIFERENCIAIS</a></li>
						<li><a href="tratamentos.php">TRATAMENTOS</a></li>
						<li><a href="blog.php">BLOG</a></li>
						<li><a href="contato.php">CONTATO</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<section id="tratamentosHome" class="container">
			<div class="col-md-6 col-sm-6">
				<div>
				<h1>Olhar cuidadoso às suas necessidades em saúde oral</h1>
				<p>Na Machado&#38;Bonatto Odontologia, reunimos profissionais qualificados para formar uma equipe que trabalha unida em nome da sua saúde.</p>
				<p><a href="tratamentos.php">CONHEÇA NOSSOS TRATAMENTOS</a></p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<img class="img-responsive" src="images/home/tratamentos.jpg" alt="Pessoas felizes">
			</div>
		</section>

		<section id="diferenciaisHome">
			<div class="container text-center">
				<h2>Procedimentos otimizados pela modernidade.</h2>
				<p>DIFERENCIAIS</p>
			</div>
		</section>

		<section id="equipeHome" class="container">
			<div class="col-md-6 col-sm-6">
				<img class="img-responsive" src="images/home/equipe.jpg" alt="Equipe">
			</div>
			<div class="col-md-6 col-sm-6 text-right">
				<h1>Conheça nosso<br>corpo clínico</h1>
				<p>Uma equipe multidisciplinar completa e pronta para cuidar de você</p>
				<p><a href="equipe.php">SAIBA MAIS</a></p>
			</div>
		</section>

<?php $page = "home"; include "footer.php"; ?>