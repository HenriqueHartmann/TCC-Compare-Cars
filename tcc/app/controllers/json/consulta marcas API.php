<?php

// Conectando
require_once '../../models/DBConexao.php';

$con = new DBConexao();
$res = $con->getConexao();

// Executando consulta SQL
//$query = 'SELECT * FROM montadora WHERE idmontadora =5';
//$resultado = $res->query($query)->fetchAll(PDO::FETCH_ASSOC);
//$json = json_encode($resultado, JSON_PRETTY_PRINT);
//echo "$json";

    $url = file_get_contents('http://fipeapi.appspot.com/api/1/carros/marcas.json');
    $montadoras = json_decode($url);

    foreach ($montadoras as  $montadora){
        echo "insert into montadora (idmontadora, montadora) values ('".$montadora->id."','".$montadora->fipe_name."');<br>";
}