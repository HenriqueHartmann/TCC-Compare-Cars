<br>
<br>
<br>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content">
                <h1 style="color: #ff5627;">Login</h1>
            </div>
        </h2>
<form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="controladorUsuario.php?acao=login">
<div class="ui stacked segment">


<!-- Text input-->
  		<label>Email</label>
  		<div class="ui left icon input">
        <i class="user icon"></i>
  		<input maxlength="100" name="email" type="email" placeholder="Digite o seu email" required>
  		</div>
<br>
<br>
<!-- Password input-->
		<label>Senha</label>
  		<div class="ui left icon input">
        <i class="lock icon"></i>
    	<input maxlength="100" name="senha" type="password" placeholder="Digite sua senha" required>
  		</div>
<br>
<br>
<!-- Button -->
  		<div class="field">
    	<input type="submit" name="logar" id="singlebutton" class="ui fluid large blue button">
  		</div>
<br>
        Novo por aqui? <a style="color:#ff5627 !important;" href="?acaoi=cadastrar">Crie uma conta</a>

        <?php
        if (@$_GET['erro'] == 1){?>
            <div class="error-text" style="color: red">Nome ou Senha incorreto. Por Favor Tente novamente!!!</div>
        <?php } ?>
</div>
</form>
</div>
</div>
