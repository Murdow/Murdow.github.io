<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>DAIKIYO</title>
		<meta name="author" content="DOA Comm - http://doacomm.com.br/">
		<meta name="description" content="Na Daikiyo, buscamos exercer os cuidados em saúde com outro olhar, voltado às necessidades íntimas de cada indivíduo que adentra por nossas portas.">
		<meta name="keywords" content="">
		<meta name="robots" content="index,follow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="icon" href="favicon.ico" type="image/x-icon" />-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">
			<nav id="mobileMenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="filosofia.php">Filosofia Daikiyo</a></li>
					<li><a href="tratamentos.php">Tratamentos</a></li>
					<!--<li><a href="#">Cursos</a></li>-->
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
			<header id="homeHeader" class="container">
				<a href="index.php"><img id="logo" src="images/logo.jpg" alt="DAIKIYO - Logo"></a>
				<i id="mobileMenuIcon" class="fa fa-bars pull-right" aria-hidden="true"></i>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="filosofia.php">Filosofia<br>Daikiyo</a></li>
						<li><a href="tratamentos.php">Tratamentos</a></li>
						<!--<li><a href="#">Cursos</a></li>-->
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contato.php">Contato</a></li>
						<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
					</ul>
				</nav>

				<section>
					<span class="bar"></span>
					<p>Transporte-se para<br>o mundo que<br>você merece.</p>
					<p id="count"><span>01</span>/03</p>
				</section>
				
			</header>

			<section class="container" id="aboutHome">
				<div class="row">
					<div class="col-md-2 col-sm-2">
						<h2 class="text-right">OUTRO CONCEITO EM SAÚDE</h2>
					</div>

					<div class="col-md-3 col-sm-3">
						<p>Na Daikiyo, buscamos exercer os cuidados em saúde com outro olhar, voltado às necessidades íntimas de cada indivíduo que adentra por nossas portas.</p>
					</div>

					<div class="col-md-7 col-sm-7">
						<p>Nossa equipe trabalha unida como um organismo único, de mãos dadas rumo ao mesmo objetivo: a plenitude de cada paciente.</p>
						<p><a href="#"> SAIBA MAIS</a></p>
					</div>
				</div><!--End .row-->
			</section><!--End .container-->

			<section class="container" id="zen">
				<div class="row">
					<div class="col-md-12">
						<div>
							<p>atenção integral à saúde:</p>
							<p><a href="tratamentos.php">Saiba mais sobre nossas opções de tratamento.</a></p>
						</div>
					</div>
				</div><!--End .row-->
			</section><!--End .container-->

			<section class="container" id="blogHome">
				<div class="row">
					<div class="col-md-12">
						<article class="post">
							<div class="vertical"><span>04 fev 2017</span><span class="bar"></span></div>
							
							<img class="img-responsive" src="images/postThumbnail.jpg" alt="Post Thumbnail">
							<div id="content">
								<h2>Lorem ipsum</h2>
								<p>Sed in tincidunt mi. Praesent in mi quam. Sed et sapien a lorem lobortis interdum. Nam imperdiet metus tempor molestie euismod. Maecenas posuere aliquet tellus eget feugiat. Donec urna mi, dapibus quis nibh ut, viverra pharetra massa.</p>
								<p class="pull-right"><a href="#"> CONTINUAR LENDO</a></p>
							</div>
						</article>
					</div>
				</div><!--End .row-->
				<div class="row">
					<div class="col-md-12 text-center">
						<a href="blog.php">LER MAIS NOTÍCIAS</a>
					</div>
				</div>
			</section><!--End .container-->
			<script type="text/javascript">
				var headerText = ['Transporte-se para\n o mundo que\n você merece.', 'Trilhe conosco o caminho\n rumo ao seu\n estado de plenitude.', 'Muito além da cura:\n a prevenção é o melhor\n portal para o bem-estar.'];
				var i = 1;
				setInterval(function(){ 
					var obj = $("#homeHeader section p:first").text(headerText[i]);
					obj.html(obj.html().replace(/\n/g,'<br/>'));
					
					if(i < 3) { $("#count span").text("0" + (i + 1)); i++; }
					else i = 0;
				}, 3000);
			</script>
			<?php include "footer.php"; ?>