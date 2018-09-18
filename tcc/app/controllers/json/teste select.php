<!DOCTYPE html>
<html>
<head>
    <title>Página Inicial</title>
    <link rel="shortut icon" href="../../../assets/images/Vs_black.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../node_modules/semantic-ui/dist/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/menu.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="../../../node_modules/semantic-ui/dist/semantic.min.js"></script>
    <script src="teste%20select.js"></script>
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
<form class="ui form large" method="post" action="?acao=tabela2">
    <?php
    $url = 'marcas.json'; // marcas
    //http://fipeapi.appspot.com/api/1/carros/veiculos/21.json // veiculos da marca 21
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
</form>