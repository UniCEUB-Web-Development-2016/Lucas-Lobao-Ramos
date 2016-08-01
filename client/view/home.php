<?php  if(isset($_GET['error']) && $_GET['error'] == 99): ?>

<div class="alert alert-danger alert-dismissible" role="alert" style="border-radius: 0px;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Usuario nao encontrado! Verifique as informaçoes
</div>

<?php endif; ?>
<form name="" action="control/usercontrol.php" method="post" class="navbar-form navbar-top" role="login" style="padding-left:200px;">
    <div class="row">
      <h4 class="col-lg-6 animated fadeInDown delay-07s">Já sou cadastrado! </h3>
        <form action="control/usercontrol.php" action="post">
        <div class="col-lg-2"><input type="text"      name="cpf"  class="form-control" placeholder="CPF"></div>
        <div class="col-lg-2"><input type="password"  name="pass" class="form-control" placeholder="Senha"></div>
        <div class="col-lg-2"><input type="submit" class="btn btn-default" name="login" value="Entrar"></div>
    </div>
</form>
    

<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container" style="margin-top: -10%;">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img src="img/logo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">CARONA ++</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>Você vai ao trabalho todos os dias com o carro vazio?<br>Por que não dar uma ajuda oferecendo carona a pessoas confiáveis?</li>
        </ul>
        <ul class="main-nav">    
            <li><a class="link animated fadeInUp delay-2s" href="#service">Saiba mais e faça seu cadastro!</a></li>
    	</ul>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test" ><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="#header">Início</a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="#service">Quem somos</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>O que é o CARONA ++</h2>
    	<h6><p>É um aplicativo feito com intuito de ajudar tanto motoristas que viajam diariamente com o carro vazio quanto passageiros que pegam ônibus todos os dias.</p><br><p>Todo mundo ganha!</p></h6>
        <div class="row">
        	<div class="col-lg-12 col-sm-12 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-road"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Para o motorista</h3>
                        <p>Para ajudar o meio ambiente na redução de tráfego no trânsito, motoristas podem revesar viagens com um mesmo destino. Dessa forma reduzindo o custo com combustível.</p>
                        <br>
                        <p>Além disso, é sempre bom ajudar alguém a se livrar daquele ônibus que todo brasileiro conhece ;)</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-thumbs-up"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Para o passageiro</h3>
                        <p>O passageiro pode encontrar um motorista que faça a gentileza de oferecer um lugar e até mesmo contribuir com o combustível, se livrando do terror que é um ônibus!</p>
                    </div>
                </div>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-heart"></i>
                    </div>
                    <div class="service-list-col2">
                        <h3>Confiável</h3>
                        <p>Com o CARONA++ é possível rastrear em tempo real todos seus amigos e todos passageiros de uma carona.</p>
                        <p>Além disso, todo o usuário é válidado pela nossa equipe e precisa se registrar com a conta de sua rede social.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-arrows-alt"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Funciona em qualquer dispositivo</h3>
                        <p>O CARONA++ foi desenhado para que funcione perfeitamente em qualquer dispostivo móvel!</p>
                    </div>
                </div>
                <br><br><br>
                <div class="service-list">
                    <div class="service-list-col1">
                        <i class="fa-plus"></i>
                    </div>
                    <div class="service-list-col2">
                        <a href="#contact" class="main-nav"><h2>Faça agora mesmo seu cadastro!</h2></a>
                    </div>
                </div>
            </div>
            <!--
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/macbook-pro.png" alt="">
            </figure>
            -->
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">Com o CARONA++ consegui diminuir meu custo mensal com gasolina pela metade!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>Motorista Comum</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><!--<img src="img/c-liogo1.png" alt="">--></a></li>
            <li><a href="#"><!--<img src="img/c-liogo2.png" alt="">--></a></li>
            <li><a href="#"><!--<img src="img/c-liogo3.png" alt="">--></a></li>
            <li><a href="#"><!--<img src="img/c-liogo4.png" alt="">--></a></li>
            <li><a href="#"><!--<img src="img/c-liogo5.png" alt="">--></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->




<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Abra uma conta!</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
        <div class="container" align="center">
        <form action="control/usercontrol.php" method="post">
            <input type="text" name="name" placeholder="nome" class="form-control" required> <br>
            <input type="text" name="last" placeholder="sobrenome" class="form-control" required><br>
            <input type="email" name="email" placeholder="email" class="form-control" required><br>
            <input type="text" name="cpf" placeholder="cpf" class="form-control" required><br>
            <input type="text" name="rg" placeholder="rg" class="form-control" required><br>
            <input type="telephone" name="phoneNumber" placeholder="telefone" class="form-control" required><br>
            <input type="date" name="birthDate" placeholder="data de nascimento" class="form-control" required><br>
            <input type="text" name="driver" placeholder="Você é um motorista? Responda 's' ou 'n'" class="form-control" required><br>
            <input type="text" name="carplate" placeholder="placa do carro" class="form-control" required><br>
            <input type="password" name="pass" placeholder="senha" class="form-control" required><br>
            <input type="submit" name="form" value="Cadastrar!" class="form-control">
        </form>
        </div>
</section>
</div>