<br>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content">
                <h1 style="color: #ff5627;">Cadastrar Modelo</h1>
            </div>
        </h2>
        <form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="?acao=cadastrarmodelo">
            <div class="ui stacked segment">

                <!-- ID Montadora input-->

                <div class="ui left icon input">
                    <i class="hashtag icon"></i>
                    <input maxlength="100" name="idmodelo" type="text" placeholder="Digite o id do modelo">
                </div>

                <br>
                <br>

                <!-- Montadora Name input-->

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input maxlength="100" name="modelo" type="text" placeholder="Digite o modelo">
                </div>

                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input maxlength="100" name="idmontadora" type="text" placeholder="Digite o id da montadora do modelo">
                </div>

                <br>
                <br>

                <!-- Button -->
                <div class="field">
                    <input type="submit" name="enviar" id="singlebutton" class="ui fluid large blue button">
                </div>
                <br>
            </div>
        </form>
    </div>
</div>
</body>
</html>
