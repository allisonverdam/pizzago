<!DOCTYPE html>
<html lang ="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PizzaGo - Que tal uma PizzaGo hoje?</title>
    <link href="http://db.onlinewebfonts.com/c/32c8931f21c89015d3d34497a2b9f1d5?family=NexaW01-Bold" rel="stylesheet" type="text/css">
    <link href="http://db.onlinewebfonts.com/c/a79f38455df86762ce31fc6d431ab82b?family=NexaW01-Thin" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/pizzago.css" rel="stylesheet">
  <link href="http://db.onlinewebfonts.com/c/ed2cc5f838ef29a273edd918aa162c5f?family=Broadway" rel="stylesheet" type="text/css">


      <!-- Chamada JS -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- fim JS -->
  </head>
  <a name="top" id="top"></a>
  <body  data-spy="scroll" data-target="#my-navbar">

    <!-- Inicio Nav Menu -->
    <?php include("navPadrao.php"); ?>
    <!-- Fim Nav Menu -->


      <!--Inicio Carrosel-->
    <section class="carousel slide" ><!-- Início da Section-->

      <div id="carousel-magico" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
            <img src="slide1.png" title="As Melhores Pizzas da Região" alt="bebe" class="carrosel">
            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <img src="slide2.png" title="Pizza Grande todos os dias" alt="Pizza Grande todos os dias" class="carrosel">
            <div class="carousel-caption">

            </div>

          </div>
          <div class="item">
            <img src="slide3.png" title="Pizza de Tatui" alt="Lançamento Pizza de Tatui" class="carrosel">
            <div class="carousel-caption">

            </div>

          </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-magico" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-magico" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </section><!-- Fim da Section -->




<section id="combo">

<div class="container">
            <div class="page-header" id="features">

          <h1><hr>COMBOS<hr></h1>
        </div>
        <div class="row">
          <div class="container">
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon">
                  <p id="combo1">Combo 1</p></span>
                <hr style="margin-top: 0px;" width: 30%;>

                <h4 id="pizza">1 Pizza Média</h4>
                <h4 id="refri">+ Refri</h4>
                <h4 id="pessoa">2 Pessoas</h4></p>
                <section id="precototal">
                <p>
                <p id="preco1"> 29 </p>
                <p id="preco2">90</p>
              </p>
                <p id="cifrao">R$</p>
                </section>
                <a href="Cardapio.html"> <button style="font-family:Nexa-Bold" type="button" class="btn btn-primary" title="Comprar combo 1 - 1 Pizza Média mais refrigerante para 2 pessoas, 29 e 90 reais">COMPRAR</button></a>

              </div>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon"><p id="combo1">Combo 2</p></span>
                <hr style="margin-top: 0px;" width: 30%;>
                <h1 class="oculto"></h1>
                <h2 class="oculto"></h2>
                <h3 class="oculto"></h3>
                <h4 id="pizza">1 Pizza Grande</h4>
                <h4 id="refri">+ Refri</h4>
                <h4 id="pessoa">3 Pessoas</h4></p>
                <section id="precototal">
                <p>
                <p id="preco1"> 41 </p>
                <p id="preco2">90</p>
              </p>
                <p id="cifrao">R$</p>
                </section>
                <a href="Cardapio.html"> <button style="font-family:Nexa-Bold"type="button" class="btn btn-primary"title="Comprar combo 2 - 1 Pizza Grande mais refrigerante para 3 pessoas, 41 e 90 reais">COMPRAR</button></a>

              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-body">
                <span class="glyphicon"><p id="combo1">Combo 3</p></span>
                <hr style="margin-top: 0px;" width: 30%;>

                <h4 id="pizza">1 Pizza Gigante</h4>
                <h4 id="refri">+ Refri</h4>
                <h4 id="pessoa">4 Pessoas</h4></p>
                <section id="precototal">
                <p>
                <p id="preco1"> 49 </p>
                <p id="preco2">90</p>
              </p>
                <p id="cifrao">R$</p>
                </section>
                <a href="Cardapio.html"> <button style="font-family:Nexa-Bold"type="button" class="btn btn-primary" title="Comprar combo 3 - 1 Pizza Gigante mais refrigerante para 4 pessoas, 49 e 90 reais">COMPRAR</button></a>

              </div>
            </div>
          </div>
        </div>
        </div>
  </div>
  <br>

    </section>


<section id="rodape">
  <footer>

        <div class="container text-center">
        <p id="email">Receber ofertas pelo email</p>
        <p>Digite seu nome e email</p>

        <form action="" class="form-inline">
          <div class="form-group">
            <label for="subscription">Nome</label>
            <input type="text" class="form-control" id="subscription" label=""placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Digite seu email">
          </div>
          <button type="submit" class="btn btn-default">Enviar</button>

        </form>

        <hr>
        <ul class="list-inline">
          <li><a href="http://www.twitter.com"><img src="redes_sociais/twitter.png" title="Twitter" alt="Twitter"></a></li>
          <li><a href="http://www.facebook.com"><img src="redes_sociais/facebook.png" title="Facebook" alt="Facebook"></a></li>
          <li><a href="http://www.instagram.com"><img src="redes_sociais/instagram.png" title="Instagram" alt="Instagram"></a></li>
        </ul>

        <p>&copy; Copyright @ 2015 | <a href="#top">Voltar ao Topo</a></p>

      </div><!-- end Container-->


    </footer>
</section>
  </body>

</html>
