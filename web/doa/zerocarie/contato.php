<?php include "header.php"; ?>
	
	<section class="container" id="content">
		<h2 id="contactHeading">Contato</h2>

		<div class="row">
			<div class="col-md-3 col-sm-4 contactBox">
				<img src="imagens/contato/phone.png" alt="Icone de telefone">
				<p class="bold"><a href="tel:6733224900">67 3322.4900</a></p>
			</div>
			<div class="col-md-3 col-sm-4 contactBox">
				<img src="imagens/contato/mail.png" alt="Icone de Email">
				<p><a href="mailto:zerocarie@zerocarie.com.br?Subject=Contato" target="_top">zerocarie@zerocarie.com.br</a></p>
			</div>
			<div class="col-md-3 col-sm-4 contactBox">
				<img src="imagens/contato/facebook.png" alt="Icone de facebook">
				<p><a href="https://www.facebook.com/zerocarie/" target="_blank">/zerocarie</a></p>
			</div>
			<div class="col-md-3 col-sm-4 contactBox">
				<img src="imagens/contato/instagram.png" alt="Icone de instagram">
				<p><a href="https://www.instagram.com/zerocarie" target="_blank"> @zerocarie</a></p>
			</div>
		</div>

		<div class="row" id="location">
			<div class="col-md-12">
				<p>Rua Jeribá, 256 | Chácara Cachoeira | Campo Grande | MS | 79040-120</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.0631332624457!2d-54.58976978507685!3d-20.462599986307676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9486e8c0a5922663%3A0x9aa661cf3c40bf30!2sR.+Jeriba%2C+256+-+Vila+Manoel+da+Costa+Lima%2C+Campo+Grande+-+MS!5e0!3m2!1spt-BR!2sbr!4v1500261656169" allowfullscreen></iframe>
			</div>
		</div>

		<form method="post" action="enviar.php">
			<div class="row">
				<h3>Fale Conosco!</h3>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<input type="text" name="nome" id="nome" placeholder="Nome" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<input type="text" name="idade" id="idade" placeholder="Idade" required>
				</div>
				<div class="col-md-8">
					<input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
				</div>
				<div class="col-md-2">
					<select name="estado" id="estado"> 
						<option value="estado">Estado</option> 
						<option value="ac">Acre</option> 
						<option value="al">Alagoas</option> 
						<option value="am">Amazonas</option> 
						<option value="ap">Amapá</option> 
						<option value="ba">Bahia</option> 
						<option value="ce">Ceará</option> 
						<option value="df">Distrito Federal</option> 
						<option value="es">Espírito Santo</option> 
						<option value="go">Goiás</option> 
						<option value="ma">Maranhão</option> 
						<option value="mt">Mato Grosso</option> 
						<option value="ms">Mato Grosso do Sul</option> 
						<option value="mg">Minas Gerais</option> 
						<option value="pa">Pará</option> 
						<option value="pb">Paraíba</option> 
						<option value="pr">Paraná</option> 
						<option value="pe">Pernambuco</option> 
						<option value="pi">Piauí</option> 
						<option value="rj">Rio de Janeiro</option> 
						<option value="rn">Rio Grande do Norte</option> 
						<option value="ro">Rondônia</option> 
						<option value="rs">Rio Grande do Sul</option> 
						<option value="rr">Roraima</option> 
						<option value="sc">Santa Catarina</option> 
						<option value="se">Sergipe</option> 
						<option value="sp">São Paulo</option> 
						<option value="to">Tocantins</option> 
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<input type="text" name="email" id="email" placeholder="Email" required>
				</div>
				<div class="col-md-4">
					<input type="text" name="fone" id="fone" placeholder="Telefone" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<input type="text" name="assunto" id="assunto" placeholder="Assunto" required>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<textarea name="menssagem" id="menssagem" placeholder="Menssagem" required></textarea>
				</div>
			</div>
			<div class="row">
				<img src="imagens/contato/formBtnIcon.png" alt="Icone Zerinho">
				<input type="submit" name="submit" value="ENVIAR">
			</div>
		</form>
	</section>

<?php include "footer.php"; ?>