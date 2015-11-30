<!DOCTYPE html>
<html lang ="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ranking</title>
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

                    <div id="rank-de-pizzas-mais-pedidas">
              </div>



					<section id="rank">
<div>
<div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="carousel" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div  class="active item" data-slide-number="0">
                                        <img src="pizzas/slide-maior/1_Portuguesa.GIF" alt="Portuguesa" title="Primeiro lugar pizza Portuguesa">
                                    </div>

                                        <div class="item" data-slide-number="1">
                                        <img src="pizzas/slide-maior/2_Calabresa.GIF" alt="Calabresa" title="Segundo lugar pizza Calabresa">
                               			</div>

                                        <div class="item" data-slide-number="2">
                                        <img src="pizzas/slide-maior/3_Mussarela.GIF" alt="Mussarela" title="Terceiro lugar pizza Mussarela"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="pizzas/slide-maior/4_Marguerita.GIF" alt="Marguerita" title="Quarto lugar pizza Marguerita"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="pizzas/slide-maior/5_Bacon.GIF" alt="Bacon" title="Quinto lugar pizza de Bacon"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="pizzas/slide-maior/6_Peperoni.GIF" alt="Peperoni" title="Sexto lugar pizza de Peperoni"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control2" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control2" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                    </div>
                            </div>


                        </div>
                    </div>
                </div><!--/Slider-->
                <section id="nome-pizzas">
                <div class="row">
                        <!-- Bottom switcher of slider -->

                        <ul class="hide-bullets">
                            <div class="container">
                            <li class="col-sm-4">
                            <div class="thumbnail text-center" style="background-color:#009246; color: #ffffff">

                                    <div style="background-color: #ffffff; margin-bottom: -15px; ">
                                        <img src="pizzas/mini_portuguesa.jpg" alt="Portuguesa" title="Mini Pizza Portuguesa">
                                </div>

                                   <hr style="color: #f74141;background-color:#ffffff;height: 0px; ">
                                   <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-15px;">1º - Portuguesa</p>
                                   <button style="font-family:Nexa-Bold;" type="button" class="btn btn-primary" id="botao-comprar" alt="Comprar Pizza Portuguesa" title="Botão Comprar">COMPRAR</button>

                               </div>

                            </li>

                            <li class="col-sm-4">


                                 <div class="thumbnail text-center" style="background-color:#ffffff; color: #000000">

                                     <div style="background-color: #ffffff; margin-bottom: -15px; ">

                                    <img src="pizzas/mini_calabresa.jpg" alt="Calabresa" title="Mini Pizza Calabresa">

                                </div>
                                  <hr style="color: #f74141;background-color:#f74141;height: 0px;">
                                  <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-15px;">2º - Calabresa</p>
                                   <button style="font-family:Nexa-Bold; " type="button" class="btn btn-primary" alt="Comprar Pizza Clabresa" title="Botão Comprar">COMPRAR</button>

                                    </div>

                            </li>

                                    <li class="col-sm-4">
                                 <div class="thumbnail text-center" style="background-color:#f74141; color: #ffffff">
                                     <div style="background-color: #ffffff; margin-bottom: -15px; ">

                                    <img src="pizzas/mini_mussarela.jpg" alt="Mussarela" title="Mini Pizza Mussarela">

                                </div>
                                  <hr style="color: #f74141;background-color:#f74141;height: 0px;">
                                  <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-17px;">3º - Mussarela</p>
                                   <button style="font-family:Nexa-Bold;" type="button" class="btn btn-primary" alt="Comprar Pizza Mussarela" title="Botão Comprar">COMPRAR</button>

                                    </div>

                            </li>


                                    <li class="col-sm-4">
                                 <div class="thumbnail text-center" style="background-color:#009246; color: #ffffff">
                                     <div style="background-color: #ffffff; margin-bottom: -15px; ">

                                    <img src="pizzas/mini_marguerita.jpg" alt="Marguerita" title="Mini Pizza Marguerita">

                                </div>
                                  <hr style="color: #f74141;background-color:#f74141;height: 0px;">
                                  <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-17px;">4º - Marguerita</p>
                                   <button style="font-family:Nexa-Bold;" type="button" class="btn btn-primary" alt="Comprar Pizza Marguerita" title="Botão Comprar">COMPRAR</button>
                                    </div>

                            </li>

                           <li class="col-sm-4">
                                 <div class="thumbnail text-center" style="background-color:#ffffff; color: #000000">
                                     <div style="background-color: #ffffff; margin-bottom: -15px; ">

                                    <img src="pizzas/mini_bacon.jpg" alt="Bacon" title="Mini Pizza de Bacon">

                                </div>
                                  <hr style="color: #f74141;background-color:#f74141;height: 0px;">
                                  <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-17px;">5º - Bacon</p>
                                   <button style="font-family:Nexa-Bold;" type="button" class="btn btn-primary" alt="Comprar Pizza de Bacon" title="Botão Comprar">COMPRAR</button>

                                    </div>

                            </li>

                                <li class="col-sm-4">
                                 <div class="thumbnail text-center" style="background-color:#f74141; color: #ffffff">
                                     <div style="background-color: #ffffff; margin-bottom: -15px; ">

                                    <img src="pizzas/mini_peperoni.jpg" alt="Peperoni" title="Mini Pizza de Peperoni">

                                </div>
                                  <hr style="color: #f74141;background-color:#f74141;height: 0px;">
                                  <p style="font-family:Nexa-Bold;  text-align:center; margin-top:-17px;">6º - Peperoni</p>
                                   <button style="font-family:Nexa-Bold;" type="button" class="btn btn-primary" alt="Comprar Pizza de Peperoni" title="Botão Comprar">COMPRAR</button>

                                    </div>

                            </li>
                            </div>
                        </ul>
                </div>
            </section>
        </div>
</div>
</section>







<br>
<section id="rodape" style="background-color:#f74141; color:#ffffff;">
    <footer>

        <div class="container text-center">
        <p id="email">Receber oferta pelo email</p>
        <p>Digite seu nome e email</p>

        <form action="" class="form-inline">
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

        <h6>&copy; Copyright @ 2015</h6>

      </div><!-- end Container-->


    </footer>
</section>
</html>
