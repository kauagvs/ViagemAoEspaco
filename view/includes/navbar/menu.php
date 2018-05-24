<?php  
 $dir = $_SERVER['DOCUMENT_ROOT']; 
 $endereco = $_SERVER ['REQUEST_URI'];
?>


<header role="banner" id="section_header">
	<div class="fluid-container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<a href="#" class="js-nav_toggle nav_toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="navbar-brand" href="/">Viagem Ao Espaço</a> 
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				 	<li class="active"><a href="/" data-nav-section="home"><span>Home</span></a></li>
					<li class="active"><a href="#" data-nav-section="services"><span>O jogo</span></a></li>
					<li class="call-to-action"><a class="sign-up" href="/view/paginas/cadastro/cadastro.php"><span>Cadastre-se</span></a></li>
					<li class="call-to-action"><a class="log-in" href="/view/paginas/login/login.php"><span>Acessar</span></a></li>
				</ul>
			</div>
		</nav>
  </div>
</header>