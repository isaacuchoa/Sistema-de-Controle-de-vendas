<?php 
	session_start();
	if(!isset($_SESSION["LOGADO"])){
		@header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<html lang="pt-br">
<head>
	<title>Fiax - Controle de Vendas</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link href="css/estilo.css" rel="stylesheet">	
	<link href="css/reset.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
		
	
</head>
<body>
	<div id="estrutura">
	<header>
		<div id="logomarca"><a href="#"><img src="img/logomarca.PNG" alt="logomarca do sistema"></a></div>	
	</header>
	<nav>
		<div class="btn-group">
  			<button type="button" class="btn btn-warning">Cliente</button>
  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  			<span class="caret"></span>
  			<span class="sr-only">Toggle Dropdown</span>
  			</button>
  			<ul class="dropdown-menu" role="menu">
   				 <li><a href="?telas=frmCadCliente">Cadastrar</a></li>
   				 <li><a href="#">Editar</a></li>
    			 <li class="divider"></li>
   				 <li><a href="#">Listar</a></li>
  			</ul></div>
  			<div class="btn-group">
  			<button type="button" class="btn btn-warning">Pedido</button>
  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  			<span class="caret"></span>
  			<span class="sr-only">Toggle Dropdown</span>
  			</button>
  			<ul class="dropdown-menu" role="menu">
   				 <li><a href="#">Cadastrar</a></li>
   				 <li><a href="#">Editar</a></li>
    			 <li class="divider"></li>
   				 <li><a href="#">Listar</a></li>
  			</ul></div>
  			<div class="btn-group">
  			<button type="button" class="btn btn-warning">Entrega</button>
  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  			<span class="caret"></span>
  			<span class="sr-only">Toggle Dropdown</span>
  			</button>
  			<ul class="dropdown-menu" role="menu">
   				 <li><a href="#">Cadastrar</a></li>
   				 <li><a href="#">Editar</a></li>
    			 <li class="divider"></li>
   				 <li><a href="#">Listar</a></li>
  			</ul></div>
  			<div class="btn-group">
  			<button type="button" class="btn btn-warning">Etiqueta</button>
  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  			<span class="caret"></span>
  			<span class="sr-only">Toggle Dropdown</span>
  			</button>
  			<ul class="dropdown-menu" role="menu">
   				 <li><a href="#">Cadastrar</a></li>
    			 <li><a href="#">Editar</a></li>
   				 <li><a href="#">Excluir</a></li>
   				 <li class="divider"></li>
   				 <li><a href="#">Imprimir</a></li>
  			</ul></div>
  			<div class="btn-group">
  			<button type="button" class="btn btn-warning">Relatórios</button>
  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
  			<span class="caret"></span>
  			<span class="sr-only">Toggle Dropdown</span>
  			</button>
  			<ul class="dropdown-menu" role="menu">
   				 <li><a href="#">Cliente</a></li>
    			 <li><a href="#">Pedido</a></li>
   				 <li><a href="#">Entrega</a></li>
   				 <li class="divider"></li>
   				 <li><a href="#">Listar</a></li>
  			</ul>
		</div>
    
<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('.dropdown-toggle').dropdown();
  }); 
</script>
	<div id="conteudo">
		
		<?php
					include_once("classe/verURL.php");
					$url = new verURL();
					$url->trocarURL($_GET["telas"])
          		?>

	</div>
	
	
</nav>
<footer>
	<div id="copyright">&copy 2016 - Fiax - Versão 1.0.1</div>
  <a href="classe/LoginSistema.php?txtLocal=logOff">Sair do sistema</a>
</footer></div>
</body>
</html>