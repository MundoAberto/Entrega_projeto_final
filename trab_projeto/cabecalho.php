<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"></script>
	<link rel="shortcut icon" href="imagens/logo1.png" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	   <script src="semantic/semantic.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/principal.css">
	<title>Open World</title>
	<meta charset="UTF-8">
</head>
<body>

	<div class="ui menu inverted">
	<a class="item tit" href="index.php">
		<img class="logo1" src="imagens/logo1.png">
			<div class="titulo">
			<h4>Open World</h4>
		</div>
	</a>
		<a class="item" href="index.php">
			Home
		</a>
		<div class="ui pointing dropdown link item dorp">
			<div class="aqui">
			<span class="text ">Categories</span>
			<i class="dropdown icon"></i>
			</div>
			<div class="menu">
<?php

include "funcoes.php";
$outraLista=listaCategoria();
foreach ($outraLista as $categoria) {
	echo '		<a class="item" href="detalhaCategoria.php?cod2='.$categoria["cod"].'">'.$categoria["categoria"].'</a>
';
}


?>

			</div>
		</div>
		<a class="item" href="top.php">
				Top
			</a>
		<div class="ui category search item right">
			<div class="ui icon input">
				<input class="prompt right" type="text" placeholder="Seach games">
				<i class="search icon"></i>
			</div>
			<div class="results"></div>
		</div>
		<a class="item direita" href="login.php">
			Login
		</a>
	</div>
</div>
</div>