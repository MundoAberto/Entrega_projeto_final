<?php 
include("cabecalho.php");
?>
<div class="marginTop "></div>
<h1 class="nomeResenha aaa">Top 10 semanal</h1> 
<div class="ui grid center aligned page grid">
  <?php
  $lista=listaResenhas();
  foreach ($lista as $dados) {
if ($dados['cod']<=10) {


    echo('
      <!-- Item-->
     
      <div class="five wide column ">
      <a href="detalhaResenha.php?cod='.$dados['cod'].'">
      <div class="ui card">
      <div class="ui slide masked reveal image">
      <img src="imagens/'.$dados['imagem1'].'" class="visible content">
      <img src="imagens/'.$dados['imagem2'].'" class="hidden content">
      </div>
      <div class="content">
      <a class="header"  href="detalhaResenha.php?cod='.$dados['cod'].'">'.$dados['nome'].'</a>
      <div class="meta">
      <span class="date">'.$dados['info'].'</span>
      </div>
      </div>
      <div class="extra content">
      <a href="detalhaCategoria.php?cod2=#">
      <i class="'.$dados['icone'].' icon"></i>
      '.$dados['categoria'].'
      </a>
      </div>
      </div>
      </a>
      </div>
      '); 
  }
}

  ?>
  <!-- Fim do tem-->

</div>
</div>

<?php

include ("rodape.php");
?>