<br>
<br>
<div style="font-size: 2em" class="ui left floated">
    <h2>COMPARE OS CARROS AQUI</h2>
</div>
        <form class="ui form large" method="post" action="controladorComparacao.php?acao=tabela2">
                <?php
                $url = 'http://fipeapi.appspot.com/api/1/carros/marcas.json'; // marcas
                //http://fipeapi.appspot.com/api/1/carros/veiculos/21.json // veiculos da marca 21
                $data = file_get_contents($url); // put the contents of the file into a variable
                $marcas = json_decode($data); // decode the JSON feed
                ?>
            <div>
                <div class="ui center aligned three column grid segment">
                    <div class="column">
                        <?php
                        echo '<select name="marca" id="marca" class="select-marca">';
                        echo '<option selected>Selecione a Marca:</option>';
                        foreach ($marcas as $marca) {
                            echo '<option value="'.$marca->id.'">'.$marca->name.'</option>';
                        }
                        echo '</select>';
                        ?>
                        <select name="modelo" id="modelo" class="select-modelo">
                            <option>Selecione o Modelo:</option>
                        </select>
                        <select name="ano" id="ano" class="select-ano">
                            <option>Selecione o Ano:</option>
                        </select>
                        <div class="carregando" style="color: white;"><h3>Carregando...</h3></div>
                    </div>
                    <div class="column">
                        <?php
                        echo '<select name="marca1" id="marca1" class="select-marca">';
                        echo '<option selected>Selecione a Marca:</option>';
                        foreach ($marcas as $marca) {
                            echo '<option value="'.$marca->id.'">'.$marca->name.'</option>';
                        }
                        echo '</select>';
                        ?>
                        <select name="modelo1" id="modelo1" class="select-modelo">
                            <option>Selecione o Modelo:</option>
                        </select>
                        <select name="ano1" id="ano1" class="select-ano">
                            <option>Selecione o Ano:</option>
                        </select>
                        <div class="carregando" style="color: white;"><h3>Carregando...</h3></div>
                    </div>
                </div>
                <div class="ui center aligned segment">
                    <button disabled="true" id="comparar_coches" class="ui red button submit">
                        Enviar
                    </button>
                </div>
            </div>
        </form>