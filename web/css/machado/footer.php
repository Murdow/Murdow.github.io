<footer>
			<div class="container">
				<div class="col-md-3 col-sm-3">
					<h2>Endereço</h2>
					<p>Rua Cayowaá, 759 - conjs. 93/94<br>
					São Paulo - SP<br>
					CEP 05018-001
					</p>

					<h2>Telefone</h2>
					<p><a href="tel:1138622619">11 3862-2619</a></p>

					<ul id="social">
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-3">
					<h2>Mapa do site</h2>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="equipe.php">Nossa equipe</a></li>
						<li><a href="diferenciais.php">Diferenciais</a></li>
						<li><a href="tratamentos.php">Tratamentos</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div>

				<div class="col-md-6 col-sm-6 text-right">
					<img class="img-responsive pull-right" src="images/logo.png" alt="Machado&Bonatto - Logo">
				</div>
			</div>
			<div id="cro">
				<div class="container">
					<div class="col-md-12">
						<p>Responsável técnica: Dra. Angela Cristina de Sousa Bonatto | cirurgiã-dentista | CRO SP 74164 <a class="pull-right" href="http://doacomm.com.br/"><img src="images/doaLogo.jpg" alt="DOA Comm"></a></p>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<?php if($page == "home") : ?>
			<script type="text/javascript">
				$(window).scroll(function() {
			    	var scrollPosition = $(window).scrollTop();
			    	var state = false;
			    	var sh = $(window).height();
			        //Altera a cor da seção ativa no menu
			        if(scrollPosition > sh && !state) {
			        	//$("header .container-fluid").slideDown('slow');
			            state = true;
			            $("header").addClass("fixedHeader");
			            $("#banner div:first-child img").css("position", "inherit");
			        }
			        else {
			        	//$("header .container-fluid").slideUp('slow');
			        	state = false;
			        	$("header").removeClass("fixedHeader");
			        	$("#banner div:first-child img").css("position", "fixed");
			        }
			    });

			</script>
		<?php else : ?>
			<script type="text/javascript">
				$(window).scroll(function() {
			    	var scrollPosition = $(window).scrollTop();
			    	var state = false;
			    	var sh = 143;
			        //Altera a cor da seção ativa no menu
			        if(scrollPosition > sh && !state) {
			        	//$("header .container-fluid").slideDown('slow');
			            state = true;
			            $("header .container-fluid").css("display", "none");
			            $("header").addClass("fixedHeader");
			        }
			        else {
			        	//$("header .container-fluid").slideUp('slow');
			        	state = false;
			        	$("header .container-fluid").css("display", "block");
			        	$("header").removeClass("fixedHeader");
			        }
			    });

			</script>
		<?php endif; ?>

		<script type="text/javascript">
			$("#mobileMenu").click(function(){
				$("header nav").slideToggle("slow");
			});
		</script>

		<!--MCT - Nov 2017-->
	</body>
</html>