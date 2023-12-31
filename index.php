<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		
	</head> 

	<body>
	
		<header>
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" >
			<h2></h2>
			<p class="lead">O que achou dos nossos serviços?</p>
		</header>
		<main>
			<div class="container">  
				<form action="processa_envio.php" method="post" style="order: 1px solid red">							
					<div class="form-group">			
						
						<div class="rating-wrap">							
						<h2>Qual a sua avaliação sobre o suporte recebido?</h2>

							<div class="center">	

								<div class="wrapper">
									<input type="radio" name="rate" value="CSAT negativo" id="star-5">
									<input type="radio" name="rate" value="CSAT positivo" id="star-1">
										
									<div class="content">
											<div class="outer">
												<div class="emojis">
													<li class="slideImg"><img src="emojis/emoji-3.png" alt=""></li>
													<li><img src="emojis/emoji-5.png" alt=""></li>
													<li><img src="emojis/emoji-5.png" alt=""></li>
													<li><img src="emojis/emoji-5.png" alt=""></li>
													<li><img src="emojis/emoji-1.png" alt=""></li>
												</div>
											</div>

											<div class="stars">
												<label for="star-1" class="star-1 fas fa-star">Bom</label>
												<label for="star-5" class="star-5 fas fa-star">Ruim</label>
											</div>
										
											<div class="wrapper">
												<span class="text"></span>
												<!--<span class="numb"></span>-->
											</div>
									</div>
								</div>

							</div>		
			
							<div class="rating-wrap">							
									<h2>Atendimento</h2>
									<div class="center">
										<fieldset class="rating">
											<input type="radio" id="star5" name="rating" value="Atendimento nota: 5"/><label for="star5" class="full" title="Awesome"></label>
											<input type="radio" id="star4" name="rating" value="Atendimento nota: 4"/><label for="star4" class="full"></label>
											<input type="radio" id="star3" name="rating" value="Atendimento nota: 3"/><label for="star3" class="full"></label>
											<input type="radio" id="star2" name="rating" value="Atendimento nota: 2"/><label for="star2" class="full"></label>
											<input type="radio" id="star1" name="rating" value="Atendimento nota: 1"/><label for="star1" class="full"></label>
										</fieldset>											
									</div>
							</div>		
					
							<div class="rating-wrap">							
									<h2>Resolução</h2>
									<div class="center">
										<fieldset class="rating">
											<input type="radio" id="star5.1" name="rating1" value="Resolução nota: 5"/><label for="star5.1" class="full" title="Awesome"></label>
											<input type="radio" id="star4.1" name="rating1" value="Resolução nota: 4"/><label for="star4.1" class="full"></label>
											<input type="radio" id="star3.1" name="rating1" value="Resolução nota: 3"/><label for="star3.1" class="full"></label>
											<input type="radio" id="star2.1" name="rating1" value="Resolução nota: 2"/><label for="star2.1" class="full"></label>
											<input type="radio" id="star1.1" name="rating1" value="Resolução nota: 1"/><label for="star1.1" class="full"></label>
										</fieldset>
									</div>
							</div>			
					
							<div class="rating-wrap">							
									<h2>Tempo de resolução</h2>
									<div class="center">
										<fieldset class="rating">
											<input type="radio" id="star5.3" name="rating2" value="Tempo de resolução note: 5"/><label for="star5.3" class="full" title="Awesome"></label>
											<input type="radio" id="star4.3" name="rating2" value="Tempo de resolução note: 4"/><label for="star4.3" class="full"></label>
											<input type="radio" id="star3.3" name="rating2" value="Tempo de resolução note: 3"/><label for="star3.3" class="full"></label>
											<input type="radio" id="star2.3" name="rating2" value="Tempo de resolução note: 2"/><label for="star2.3" class="full"></label>
											<input type="radio" id="star1.3" name="rating2" value="Tempo de resolução note: 1"/><label for="star1.3" class="full"></label>
										</fieldset>
									</div>
							</div>			

							<div class="form-group">
								<label for="mensagem">Deixe aqui seu comentário para nos ajudar a melhorar</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

						<button type="submit" class="btn btn-primary btn-lg">Enviar Avaliação</button>
				</form>									
			</div>			
		</main>
			<script src="star-ratings.js"></script>
	</body>
</html>