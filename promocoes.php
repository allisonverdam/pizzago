<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Promoções</title>
		<link href="css/bootstrap.css" rel="stylesheet">
      <!-- Chamada JS -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- fim JS -->
	</head>
<style>
	body{
		padding-top: 40px;
	}
	</style>
	<body  data-spy="scroll" data-target="#my-navbar">


		<!-- Inicio Nav Menu -->
		<?php include("navPadrao.php"); ?>
		<!-- Fim Nav Menu -->


					<div id="banner-promocoes">
					</div>

					<section id="promocoes">
						<div class="container">
							<center>
							<img src="combos/combo1.png">
							<img src="combos/combo2.png">
							<img src="combos/combo3.png">
							</center>
						</div>
					</section>
<br>
<br>
<section id="rodape" style="background-color:#f74141; color:#ffffff">
	<footer>

        <div class="container text-center">
        <p id="email">Receber ofertas pelo email</p>
        <p>Digite seu nome e email</p>

        <form method= "post" action="mailto: lucasccipriano@gmail.com" class="form-inline">
          <div class="form-group">
            <label for="subscription">Nome</label>
            <input type="text" class="form-control" id="subscription" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Digite seu email">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>

        </form>

        <hr>
        <ul class="list-inline">
                  <li><a href="http://www.twitter.com"><img src="redes_sociais/twitter-rank.png" title="Twitter" alt="Twitter"></a></li>
          <li><a href="http://www.facebook.com"><img src="redes_sociais/facebook-rank.png" title="Facebook" alt="Facebook"></a></li>
          <li><a href="http://www.instagram.com"><img src="redes_sociais/instagram-rank.png" title="Instagram" alt="Instagram"></a></li>

        </ul>

        <p>&copy; Copyright @ 2015</p>

      </div><!-- end Container-->


    </footer>
</section>
</html>
