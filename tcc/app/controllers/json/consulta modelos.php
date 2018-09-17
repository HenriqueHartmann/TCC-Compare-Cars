<?php
require_once "../../models/CrudModelo.php";
require_once "../../models/DBConexao.php";

$crud = new CrudModelo();
$models = $crud->getModelName();
$modelos = json_encode($models);
file_put_contents('modelos.json', "$modelos");