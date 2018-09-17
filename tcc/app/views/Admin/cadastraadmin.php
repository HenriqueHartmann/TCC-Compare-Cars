<br>
<div class="ui middle aligned center aligned grid">
     <div class="column">
    <h2 class="ui teal image header">
        <div class="content">
            Cadastre um Usuario ou Admin
        </div>
    </h2>
    <form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="?acao=cadastrar">
        <div class="ui stacked segment">

        <!-- Text input-->
        <br>
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input maxlength="100" name="nome" type="text" placeholder="Digite o nome">
                </div>
            </div>
        <br>
        <br>
        <!-- Email input-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input maxlength="100" name="email" type="email" placeholder="Digite o Email">
                </div>
            </div>
        <br>
        <br>
        <!-- Password input-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input maxlength="100" name="senha" type="password" placeholder="Digite a senha">
                </div>
            </div>
        <br>
        <br>
        <!-- Type input-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="chess pawn icon"></i>
                    <input maxlength="100" name="tipo" type="text" placeholder="Digite o tipo">
                </div>
            </div>
        <br>
        <br>
        <!-- Button -->
                <input class="ui fluid large teal button" type="submit" name="enviar">
        </div>
    </form>
</div>
</div>
</body>
</html>