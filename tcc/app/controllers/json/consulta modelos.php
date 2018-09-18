<?php
require_once "../../models/CrudModelo.php";
require_once "../../models/DBConexao.php";

$crud = new CrudModelo();
$models = $crud->getModelName();
for ($i = 1; $i <= 208; $i++) {
    foreach ($models as $model) {
        if($model['montadora_idmontadora'] == $i) {
            $modelmarca = json_encode($model);
            print_r($modelmarca);
            file_put_contents('modelo'.$i.'.json', $modelmarca);
        }
  }
}