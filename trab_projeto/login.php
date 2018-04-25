<?php
include 'cabecalho.php';
?>
<div class="topper">.</div>
<div class="ui two column middle aligned very relaxed stackable grid center aligned page grid">
  <div class="column">
    <div class="ui form">
      <div class="field">
        <label>Username</label>
        <div class="ui left icon input">
          <input type="text" placeholder="Username">
          <i class="user outline circle icon"></i>
        </div>
      </div>
      <div class="field">
        <label>Password</label>
        <div class="ui left icon input">
          <input type="password" placeholder="Password">
          <i class="lock icon"></i>
        </div>
      </div>
      <a href="index.php">
      <div class="ui green submit button">Login</div>
    </a>
    </div>
  </div>
  <div class="center aligned column">
    <div class="ui big blue labeled icon button">
      <i class="edit outline icon"></i>
    Register
    </div>
  </div>
</div>
<?php
include 'rodape.php';