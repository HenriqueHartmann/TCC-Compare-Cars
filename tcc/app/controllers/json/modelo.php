<?php

// Conectando
require_once '../../models/DBConexao.php';

$con = new DBConexao();
$res = $con->getConexao();

// Executando consulta SQL

//$query = 'SELECT * FROM modelo WHERE idmodelo =5';
//$resultado = $res->query($query)->fetchAll(PDO::FETCH_ASSOC);
//$json = json_encode($resultado, JSON_PRETTY_PRINT);
//echo "$json";

// Consulta SQL e Pesquisa na tabela FIPE para cada modelo em montadora

$query = 'SELECT idmontadora FROM montadora limit 20 offset 80';
$resultado = $res->query($query)->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);

foreach ($resultado as $rst) {
//    echo 'http://fipeapi.appspot.com/api/1/carros/veiculos/'.$rst['idmontadora'].'.json';
    $url = file_get_contents('http://fipeapi.appspot.com/api/1/carros/veiculos/'.$rst['idmontadora'].'.json');

    $modelos = json_decode($url);

    foreach ($modelos as  $modelo){
         echo "insert into modelo (idmodelo, nome_modelo, montadora_idmontadora) values ('".$modelo->id."', '".$modelo->fipe_name."', ".$rst['idmontadora'].");<br>";
    }


}

// Consulta PHP e criação de pastas para cada marca

//$query = 'SELECT montadora FROM montadora';
//$resultado = $res->query($query)->fetchAll(PDO::FETCH_ASSOC);
//print_r($resultado);
//foreach ($resultado as $rst) {

//}