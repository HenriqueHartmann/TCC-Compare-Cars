<?php
$codigo = $_GET['codigo'];
?>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <div class="content">
                <h1 style="color: #ff5627;">Editar Especificação</h1>
            </div>
        </h2>
        <form class="ui large form" style="width: 400px; margin: 0 auto;" method="post" action="?acao=editarespec&codigo=<?=$codigo; ?>">
            <div class="ui stacked segment">

                <!-- ID Montadora input-->

                <div class="ui left icon input">
                    <i class="hashtag icon"></i>
                    <input name="idmodelo" type="text" value="<?= $espec->getIdveiculo() ?>">
                </div>
                <br>
                <br>
                <!-- Name MODELO input-->
                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="modelo" type="text" value="<?= $modelo->getNomemodelo() ?>">
                </div>
                <br>
                <br>
                <!-- Montadora Name input-->
                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
                </div>
                <br>
                <br>

                <div class="ui left icon input">
                    <i class="car icon"></i>
                    <input name="idmontadora" type="text" value="<?= $modelo->getMontadoraIdmontadora() ?>">
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
