<br>
<br>
<br>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content">
                <h1 style="color: #ff5627;">Cadastrar</h1>
            </div>
        </h2>

<form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="?acao=cadastrar">
<div class="ui stacked segment">


<!-- Text input-->
<br>
  		<label>Nome</label>
  		<div class="ui left icon input">
        <i class="user icon"></i>
  		<input maxlength="100" name="nome" type="text" placeholder="Digite o seu nome" required>
  		</div>
<br>
<br>
<!-- Email input-->
        <label>Email</label>
        <div class="ui left icon input">
        <i class="user icon"></i>
        <input maxlength="100" name="email" type="email" placeholder="Digite seu Email" required>
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
    	<input class="ui fluid large blue button" type="submit" name="logar">
  		</div>
<br>
    Já possui uma conta? <a style="color:#ff5627 !important" href="?acaoi=login">Log-in na sua conta</a>

        <?php
        if (@$_GET['erro'] == 1){?>
            <div class="error-text" style="color: red">Você deixou algo em branco. Por Favor Tente Novamente</div>
        <?php }elseif(@$_GET['erro'] == 2){?>
            <div class="error-text" style="color: red">Seu Email já existe. Por Favor Insira Um Válido</div>
        <?php } ?>
</div>
</form>
</div>
</div>

