<?php
include "cabecalho.php";

$codigo=$_GET['cod'];

$jogo=buscaResenha($codigo);
?>

<div class="gridDupla">

	<div class="imagem">

<?php
	echo'
<div class="ui four column grid">

  <div class="column">
    <div class="ui fluid image">
      <div class="ui white ribbon label">
        <a class="header"><i class="'.$jogo["icone"].' outline icon black large"></i> '.$jogo["categoria"].'</a>
      </div>
      <div class="fotoResenha">
          <img src="imagens/'.$jogo["imagem1"].'">
    </div>
  </div>
</div>


  <div class="resenha">
  <h1 class="nomeResenha">'.$jogo['nome'].'</h1>
  <div class="texto">
    <h3>'.$jogo["resenha"].'</h3>
  </div>
  </div>
</div>
</div>
</div>'
;
include ("rodape.php");
?>


