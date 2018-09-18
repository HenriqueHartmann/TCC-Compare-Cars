<?php
require_once "CrudModelo.php";
require_once "DBConexao.php";

//recebe o parametro referente ao modelo via GET
 $id_modelo = $_GET['idmodelo'];
// $id_modelo = 824;
$crud = new CrudModelo();
$anos = $crud->getAnosPorModelo($id_modelo);

//ALTEREI O ARQUIVO PARA QUE, EM VEZ DE ESCREVER UM ARQUIVO JSON, BUSQUE OS DADOS USANDO O MÉTODO E EXIBA O RESULTADO NA FORMA DE UM JSON

//altera o header do arquivo para json, em vez de HTML
header('Content-Type: application/json');
//o array retornado é convertido para JSON e exibido
echo json_encode($anos);

