<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PizzaGo - Que tal uma PizzaGo hoje?</title>
		<link href="http://db.onlinewebfonts.com/c/32c8931f21c89015d3d34497a2b9f1d5?family=NexaW01-Bold" rel="stylesheet" type="text/css">
		<link href="http://db.onlinewebfonts.com/c/a79f38455df86762ce31fc6d431ab82b?family=NexaW01-Thin" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/pizzago.css">
	<link href="http://db.onlinewebfonts.com/c/ed2cc5f838ef29a273edd918aa162c5f?family=Broadway" rel="stylesheet" type="text/css">


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
	<body  class="container" data-spy="scroll" data-target="#my-navbar">

			<!-- Inicio Nav Menu -->
      <?php include("navPadrao.php"); ?>
      <!-- Fim Nav Menu -->

      <div class="form-auth container">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

    		<div class="well">
    			<form name="formLogin" action="" method="post">
    				<h2 class="main-title">Acessar minha conta</h2>
    				<hr>

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
    						<input type="text" name="username" class="form-control" placeholder="Login" autofocus="" required="">
    					</div>
    					<!--formLogin-->
    				</div>

    				<div class="form-group">
    					<div class="input-group">
    						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
    						<input type="password" name="password" class="form-control" placeholder="Senha" required="">
    					</div>
    					<!--formLogin-->
    				</div>

    				<div class="form-group">
    					<div class="checkbox">
    						<label>
    							<input type="checkbox"> Mantenha-me conectado
    						</label>
    						<a href="#/esqueci-minha-senha" class="pull-right">Esqueci minha senha</a>
    					</div>
    				</div>

    				<hr>

    				<div class="row">
    					<div class="col-sm-6 mb-sm-10">
    						<button name="btn-entrar" type="submit" class="btn btn-custom-a btn-block" title="Acessar minha conta" data-loading-text="Entrando...">
    							<span class="fa fa-arrow-circle-right"></span> Entrar
    						</button>
    					</div>
    					<div class="col-sm-6">
    						<a href="cadastrar.php" class="btn btn-danger btn-block" title="Criar uma nova conta">
    							<span class="fa fa-users"></span> Não tenho cadastro
    						</a>
    					</div>
    				</div>

    			</form>
    		</div>
    	</div>
      </div>

			<?php
				if(isset($_POST['btn-entrar'])){
					if($_POST['username'] == "admin" && $_POST['password'] == "admin"){
									?>	<script>window.location.assign("painel/painel-admin.php")</script>
									<?php }else{ ?>
									<script>window.location.assign("painel/painel.php")</script>
									<?php	}} ?>

									<section id="rodape">
										<footer>

									        <div class="container text-center">

        <hr>
        <ul class="list-inline">
          <li><a href="http://www.twitter.com"><img src="redes_sociais/twitter.png"></a></li>
          <li><a href="http://www.facebook.com"><img src="redes_sociais/facebook.png"></a></li>
          <li><a href="http://www.instagram.com"><img src="redes_sociais/instagram.png"></a></li>
        </ul>

        <p>&copy; Copyright @ 2015</p>

      </div><!-- end Container-->

    </footer>
</section>
	</body>

</html>
