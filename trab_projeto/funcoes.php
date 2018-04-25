<?php

function listaResenhas(){
	$resenha= array();

	$dados= file("dados.csv");

	foreach ($dados as $posicao => $linha) {
		if ($posicao !=0) {
		$colunas= explode(";",$linha);
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenha['ano'] =$colunas[8];
			$resenhas[]=$resenha;
		}
			
	}
	return $resenhas;
}


function buscaResenha($codigo){

	$resenha= array();

	$dados= file("dados.csv");

	foreach ($dados as $linha) {
		$colunas= explode(";",$linha);
		if($colunas[0]==$codigo){
			$resenha['cod'] =$colunas[0];
			$resenha['nome'] =$colunas[1];
			$resenha['imagem1'] =$colunas[2];
			$resenha['imagem2'] =$colunas[3];
			$resenha['info'] =$colunas[4];
			$resenha['categoria'] =$colunas[5];
			$resenha['icone'] =$colunas[6];
			$resenha['resenha'] =$colunas[7];
			$resenha['ano'] =$colunas[8];
			}
	}
	return $resenha;
}


function listaCategoria(){
	
	$categoria= array();

	$dados= file("categorias.csv");

	foreach ($dados as $posicao => $linha) {
		if ($posicao !=0) {
		$colunas= explode(";",$linha);

			$categoria['cod'] =$colunas[0];
			$categoria['categoria'] =$colunas[1];
			$categorias[]=$categoria;
		}
			
	}
	return $categorias;
}

function buscaCategoria($codigo){
$categoria=array();

	$dados= file("dados.csv");

	foreach ($dados as $linha) {

		$dados=explode(";",$linha);

		if($dados[5]==$codigo){

			$categoria['cod'] =$dados[0];
			$categoria['nome'] =$dados[1];
			$categoria['imagem1'] =$dados[2];
			$categoria['imagem2'] =$dados[3];
			$categoria['info'] =$dados[4];
			$categoria['categoria'] =$dados[5];
			$categoria['icone'] =$dados[6];
			$categoria['resenha'] =$dados[7];
			$categoria['ano'] =$dados[8];
			$categorias[]=$categoria;
		}
	}
	return $categorias;
}


  print_r(buscaCategoria('Criative'));

