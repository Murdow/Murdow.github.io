<?php
	$title = "Contato"; 
   	include "header.php"; ?>

	<section class="container" id="contato">

		<div class="row">
			<div class="col-md-5">
				<p><i class="fa fa-map pull-left" aria-hidden="true"></i><span class="pull-left">Rua Joaquim Floriano, 466 11º Andar - Cj. 1116<br>Itaim Bibi | São Paulo, SP</span></p>
				<p><i class="fa fa-phone pull-left" aria-hidden="true"></i><span class="pull-left"><a href="tel:1130784993">+55 11 3078-4993</a></span></p>
				<p><i class="fa fa-clock-o pull-left" aria-hidden="true"></i><span class="pull-left">Horário de funcionamento: de segunda a sexta-feira,<br>das 9 às 17h.</span></p>
				<p>
					<a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				</p>
			</div>

			<div class="col-md-7">
			    <form class="form-horizontal" method="POST" action="enviar.php">
			  	  <div class="form-group">
			        <label class="control-label col-sm-2" for="nome">Nome:</label>
			        <div class="col-sm-10">
			          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="control-label col-sm-2" for="email">Email:</label>
			        <div class="col-sm-10">
			          <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="control-label col-sm-2" for="fone">Telefone:</label>
			        <div class="col-sm-10">          
			          <input type="tel" class="form-control" id="fone" placeholder="Digite seu telefone" name="fone" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
			        <div class="col-sm-10">          
			          <textarea class="form-control" id="mensagem" placeholder="Digite sua mensagem" name="mensagem" required></textarea>
			        </div>
			      </div>
			      <div class="form-group">        
			        <div class="col-sm-offset-2 col-sm-10">
			          <button type="submit" class="btn btn-default pull-right">Enviar</button>
			        </div>
			      </div>
			    </form>
		    </div>
	    </div>
		
	</section>

<?php include "footer.php"; ?>