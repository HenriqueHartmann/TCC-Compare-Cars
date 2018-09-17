<?php
$codigo = $_GET['codigo'];
?>

<div class="column">
    <div class="ui middle aligned center aligned grid">
        <form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="?acao=updateuser&codigo=<?=$codigo; ?>">
            <div class="ui stacked segment">
                <legend>Editar Usuario</legend>
                <div class="field">
                    <label>Nome:</label>
                    <input name="nome" type="text" value="<?=$usuario->getNome();?>">
                </div>
                <div class="field">
                    <label>Email:</label>
                    <input name="email" type="email" value="<?=$usuario->getEmail();?>">
                </div>
                <div class="field">
                    <label>Senha:</label>
                    <input name="senha" type="text" value="<?=$usuario->getSenha();?>">
                </div>
                <div class="field">
                    <label>Tipo:</label>
                    <input name="tipo" type="text" value="<?=$usuario->getTipuser();?>">
                </div>
        <br>
                <input class="ui fluid large teal button" type="submit" name="logar">
            </div>
        </form>
    </div>
</div>
</body>
</html>