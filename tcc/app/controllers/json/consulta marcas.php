<?php
require_once "../../models/CrudMontadora.php";
require_once "../../models/DBConexao.php";

$crud = new CrudMontadora();
$monts = $crud->getMontName();
$marcas = json_encode($monts);
file_put_contents('marcas.json', "$marcas");