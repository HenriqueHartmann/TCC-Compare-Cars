<?php
require_once "CrudModelo.php";
require_once "DBConexao.php";

//recebe o parametro referente ao modelo via GET
$id_veiculo = $_GET['idveiculo'];
 // $id_veiculo = 14;
$crud = new CrudModelo();
$detalhes = $crud->getDetalhesVeiculo($id_veiculo);

//ALTEREI O ARQUIVO PARA QUE, EM VEZ DE ESCREVER UM ARQUIVO JSON, BUSQUE OS DADOS USANDO O MÉTODO E EXIBA O RESULTADO NA FORMA DE UM JSON

//altera o header do arquivo para json, em vez de HTML
header('Content-Type: application/json');
//o array retornado é convertido para JSON e exibido
echo json_encode($detalhes);

