<?php
require_once "CrudModelo.php";
require_once "DBConexao.php";

//recebe o parametro referente à montadora via GET
$id_montadora = $_GET['idmontadora'];
// $id_montadora = 2;
$crud = new CrudModelo();
$modelos = $crud->getModelosPorMontadora($id_montadora);


//ALTEREI O ARQUIVO PARA QUE, EM VEZ DE ESCREVER UM ARQUIVO JSON, BUSQUE OS DADOS USANDO O MÉTODO E EXIBA O RESULTADO NA FORMA DE UM JSON

//altera o header do arquivo para json, em vez de HTML
header('Content-Type: application/json');
//o array retornado é convertido para JSON e exibido
echo json_encode($modelos);

