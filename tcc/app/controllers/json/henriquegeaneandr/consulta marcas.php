<?php
require_once "CrudMontadora.php";
require_once "DBConexao.php";

$crud = new CrudMontadora();
$monts = $crud->getMontName();
$marcas = json_encode($monts);
file_put_contents('marcas.json', "$marcas");