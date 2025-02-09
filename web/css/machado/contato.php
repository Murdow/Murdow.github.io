<?php include "header.php"; ?>

	<section id="contato" class="container">
		<h1>Contato</h1>
		<div class="col-md-8 col-sm-8">

			<p>Para dúvidas ou sugestões, preencha o formulário abaixo e entre em contato com a nossa equipe.</p>

			<form method="POST" action="enviar.php">
				<span id="successMsg"><?php if(isset($_GET['success']) && $_GET['success'] == "true") echo "Mensagem enviada com sucesso!"; ?></span>
				<div class="form-group">
					<input type="text" class="form-control" name="nome" placeholder="Nome" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="E-mail" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" name="fone" placeholder="Telefone" required maxlength="10">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6 col-sm-6">
						<input type="text" class="form-control" name="cidade" placeholder="Cidade" required>
					</div>
					<div class="form-group col-md-6 col-sm-6">
						<input type="text" class="form-control" name="estado" placeholder="Estado" required>
					</div>
				</div>
				<div class="form-group">
					<textarea name="mensagem" class="form-control" placeholder="Mensagem" required></textarea>
				</div>
				<input class="pull-right" type="submit" name="send" value="Enviar">
			</form>

		</div>

		<aside class="col-md-4 col-sm-4">
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.9178704966116!2d-46.683498849418704!3d-23.53545618462058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57e55ddbf625%3A0x2796b193278688f3!2sRua+Cayowa%C3%A1%2C+759+-+Perdizes%2C+S%C3%A3o+Paulo+-+SP%2C+05018-001!5e0!3m2!1spt-BR!2sbr!4v1512491177009" style="border:0" allowfullscreen></iframe>

			<p class="text-center"><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Cayowaá, 759 | cjs. 93/94</p>
			<p class="text-center">CEP 05018-001</p>
			
			<div class="text-center">
				<p><i class="fa fa-phone" aria-hidden="true"></i>(11)3862-2619</p>
				<p><i class="fa fa-at" aria-hidden="true"></i>contato@machadoebonatto.odo.br</p>
				<h2>Horário de funcionamento:</h2>
				<p>de segunda a sexta-feira,</p>
				<p>das 8 às 19h.</p>
			</div>
			<!--<img src="images/map.jpg" alt="Mapa">-->

		</aside>

	</section>

<?php $page = "contato"; include "footer.php"; ?>