<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
    <link rel="shortut icon" href="../../../assets/images/Vs_black.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        $(function(){
            $(".carregando").hide();
            $(".select-marca").change(function () {
                if ($(this).val()){
                    var elemPai = $(this).parent();
                    elemPai.find(".select-modelo").hide();
                    elemPai.find(".carregando").show();
                    //SPERONI - alterado para chamar o consulta_modelos.php passando o id da mmontadora
                    $.getJSON('consulta_modelos.php?idmontadora='+$(this).val(), function(j){ // estou tentando selecionar os meu arquivos modelos(id da montadora).json, mas ele somente esconde o select-modelo//
                        var options = '<option value="">Selecione...</option>';
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' +
                                j[i].idmodelo + '">' +
                                j[i].nome_modelo + '</option>';
                        }
                        elemPai.find(".select-modelo").html(options);
                        elemPai.find(".select-modelo").show();
                        elemPai.find(".carregando").hide();
                    });

                }else {
                    $('.select-modelo').html(
                        '<option value="">-- Escolha uma montadora --</option>'
                    );
                }
            });

            $('.select-modelo').change(function(){
                if( $(this).val() ) {
                    var elemPai = $(this).parent();
                    var marca = elemPai.find('.select-marca').val();
                    elemPai.find('.select-ano').hide();
                    elemPai.find('.carregando').show();
                    //SPERONI - alterado para chamar um arquivo PHP que faz a consulta por anos, a partir de um id_modelo
                    $.getJSON('consulta_anos.php?idmodelo='+$(this).val(), function(j){
                            var options = '<option value="">Selecione...</option>';
                            for (var i = 0; i < j.length; i++) {
                                options += '<option value="' +
                                    j[i].idveiculo + '">' +
                                    j[i].ano + '</option>';
                            }
                            elemPai.find('.select-ano').html(options).show();
                            elemPai.find('.carregando').hide();
                        });
                } else {
                    $('.select-ano').html(
                        '<option value="">-- Escolha um modelo --</option>'
                    );
                }
            });
// SPERONI - criada função de teste para exibir os detalhes quando escolhe um ano

            $('.select-ano').change(function(){
                if( $(this).val() ) {
                    elemPai = $(this).parent();
                    elemPai.find('.carregando').show();
                    //SPERONI - alterado para chamar um arquivo PHP que faz a consulta por anos, a partir de um id_modelo
                    $.getJSON(
                        'consulta_detalhes.php?idveiculo='+$(this).val(), function(carro){
                                var detalhes = '<ul>';
                                detalhes += '<li> Potência: '+carro.potencia+'</li>';
                                detalhes += '<li> Portas: '+carro.portas+'</li>';
                                detalhes += '<li> Preço: '+carro.preco+'</li>';
                                //aqui é possível usar todos os demais atributos
                            elemPai.find('.carregando').hide();
                            $('#detalhes-carro').html(detalhes);
                        });
                } else {
                    $('#detalhes-carro').html(
                        '<p>Nenhum detalhe...</p>'
                    );
                }
            });



        });
    </script>
    <style type="text/css">
        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
        }
    </style>
</head>
<body>
<br>
<br>
<div style="font-size: 2em" class="ui left floated">
    <h2>COMPARE OS CARROS AQUI</h2>
</div>
<form class="ui form large" method="post"><!-- não precisa enviar para nenhum lugar, e somente um teste para ver se o select está funcionando de acordo -->
    <?php
    $url = 'marcas.json'; // marcas
    $data = file_get_contents($url); // put the contents of the file into a variable
    $marcas = json_decode($data); // decode the JSON feed
    ?>
    <div>
        <div class="ui center aligned one column grid segment">
            <div class="column">
                <?php
                echo '<select name="marca" id="marca" class="select-marca">';
                echo '<option selected>Selecione a Marca:</option>';
                foreach ($marcas as $marca) {
                    echo '<option value="'.$marca->idmontadora.'">'.$marca->montadora.'</option>';
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
            </div>
        </div>
    </div>
    <p>valor da marca</p>
    <input type="text" id="valormarca" value="">
    <!--SPERONI - espaço onde será exibido o conteudo com os detalhes -->
    <div id="detalhes-carro">
        
    </div>
</form>