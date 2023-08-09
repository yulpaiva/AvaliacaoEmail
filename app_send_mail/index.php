<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		
	</head> 

	<body>

		<div class="container">  

			<div class="py-3 text-center" >
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" >
				<h2></h2>
				<p class="lead">O que achou dos nossos serviços?</p>
			

				<div class="row" style="order: 1px solid red">
					<div class="col-md-12">
					
						<div class="card-body font-weight-bold" >
							<form action="processa_envio.php" method="post" style="order: 1px solid red">
<!-- inicio para quem enviar o e-mail
								<div class="form-group">
									<label for="para">Para</label>
									<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
								</div>
fim para quem enviar o e-mail-->

<!-- inicio assunto do e-mail
								<div class="form-group">
									<label for="assunto">De 1 a 5,quanto você recomendaria nossos serviços para um amigo ou familiar?</label>
									<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Digite a nota">
								</div>
fim assunto do e-mail-->
								
								<div class="form-group">
<!-- Estrelas	inicio-->										
									<div class="rating-wrap">							
											<h2>Star Rating</h2>
											<div class="center">
												<fieldset class="rating">
													<input type="radio" id="star5" name="rating" value="5"/><label for="star5" class="full" title="Awesome"></label>
													<input type="radio" id="star4.5" name="rating" value="4.5"/><label for="star4.5" class="half"></label>
													<input type="radio" id="star4" name="rating" value="4"/><label for="star4" class="full"></label>
													<input type="radio" id="star3.5" name="rating" value="3.5"/><label for="star3.5" class="half"></label>
													<input type="radio" id="star3" name="rating" value="3"/><label for="star3" class="full"></label>
													<input type="radio" id="star2.5" name="rating" value="2.5"/><label for="star2.5" class="half"></label>
													<input type="radio" id="star2" name="rating" value="2"/><label for="star2" class="full"></label>
													<input type="radio" id="star1.5" name="rating" value="1.5"/><label for="star1.5" class="half"></label>
													<input type="radio" id="star1" name="rating" value="1"/><label for="star1" class="full"></label>
													<input type="radio" id="star0.5" name="rating" value="0.5"/><label for="star0.5" class="half"></label>
												</fieldset>
												<h4 for="rating_value" type="text" name="rating_value" id="rating_value"></h4>
											</div>
									</div>		
<!-- Estrelas	fim-->										
									
									

<!-- Comentário	inicio-->	
									<div class="form-group">
										<label for="mensagem">Deixe aqui seu comentário para nos ajudar a melhorar</label>
										<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
									</div>
<!-- Comentário	fim-->	

<!-- Estrelas	inicio-->										
									<div class="rating-wrap">							
											<h2>Star Rating</h2>
											<div class="center">
												<fieldset class="rating">
													<input type="radio" id="estrela5" name="estrela" value="5"/><label for="estrela5" class="full" title="Awesome"></label>
													<input type="radio" id="estrela4.5" name="estrela" value="4.5"/><label for="estrela4.5" class="half"></label>
													<input type="radio" id="estrela4" name="estrela" value="4"/><label for="estrela4" class="full"></label>
													<input type="radio" id="estrela3.5" name="estrela" value="3.5"/><label for="estrela3.5" class="half"></label>
													<input type="radio" id="estrela3" name="estrela" value="3"/><label for="estrela3" class="full"></label>
													<input type="radio" id="estrela2.5" name="estrela" value="2.5"/><label for="estrela2.5" class="half"></label>
													<input type="radio" id="estrela2" name="estrela" value="2"/><label for="estrela2" class="full"></label>
													<input type="radio" id="estrela1.5" name="estrela" value="1.5"/><label for="estrela1.5" class="half"></label>
													<input type="radio" id="estrela1" name="estrela" value="1"/><label for="estrela1" class="full"></label>
													<input type="radio" id="estrela0.5" name="estrela" value="0.5"/><label for="estrela0.5" class="half"></label>
												</fieldset>
												<h4 for="rating_value1" type="text" name="rating_value1" id="rating_value1"></h4>
											</div>
									</div>		
<!-- Estrelas	fim-->										
									
									

<!-- Comentário	inicio-->	
									<div class="form-group">
										<label for="mensagem">Deixe aqui seu comentário para nos ajudar a melhorar</label>
										<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
									</div>
<!-- Comentário	fim-->	

								<button type="submit" class="btn btn-primary btn-lg">Enviar Avaliação</button>
							</form>
						</div>

					</div>
				</div>

			</div>
      	</div>
	<script src="star-ratings.js"></script>
	</body>
</html>