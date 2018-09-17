<?php
    $crud = new CrudModelo();
    $crudauto = new CrudVeiculo();
//CARRO-1
    if ((isset($_POST['marca'])) and (isset($_POST['modelo'])) and
        (isset($_POST['ano'])) and ($_POST['marca']!='Selecione...')) {
        $idMarca = $_POST['marca'];
        $idModelo = $_POST['modelo'];
        $idAno = $_POST['ano'];
        $anos = file_get_contents("http://fipeapi.appspot.com/api/1/carros/veiculo/$idMarca/$idModelo/$idAno.json");
        $anos = json_decode($anos, true);
        $auto1 = $crudauto->getModelAno($idMarca, $idModelo, $anos['ano_modelo']);
        $nomemodelo = $crud->getModelo($idModelo);

    }else{

        $auto1 = new Veiculo();
    }
//END CARRO-1

//CARRO-2
    if ((isset($_POST['marca1'])) and (isset($_POST['modelo1'])) and
        (isset($_POST['ano1'])) and ($_POST['marca1']!='Selecione...')) {
        $idMarca1 = $_POST['marca1'];
        $idModelo1 = $_POST['modelo1'];
        $idAno1 = $_POST['ano1'];
        $anos1 = file_get_contents("http://fipeapi.appspot.com/api/1/carros/veiculo/$idMarca1/$idModelo1/$idAno1.json");
        $anos1 = json_decode($anos1, true);
        $auto2 = $crudauto->getModelAno($idMarca1, $idModelo1, $anos1['ano_modelo']);
        $nomemodelo1 = $crud->getModelo($idModelo1);

    }else {

        $auto2 = new Veiculo();
    }
//END CARRO-2

//CARRO-3
    if ((isset($_POST['marca2'])) and (isset($_POST['modelo2'])) and
        (isset($_POST['ano2'])) and ($_POST['marca2']!='Selecione...')) {
        $idMarca2 = $_POST['marca2'];
        $idModelo2 = $_POST['modelo2'];
        $idAno2 = $_POST['ano2'];
        $anos2 = file_get_contents("http://fipeapi.appspot.com/api/1/carros/veiculo/$idMarca2/$idModelo2/$idAno2.json");
        $anos2 = json_decode($anos2, true);
        $auto3 = $crudauto->getModelAno($idMarca2, $idModelo2, $anos2['ano_modelo']);
        $nomemodelo2 = $crud->getModelo($idModelo2);

    }else {

        $auto3 = new Veiculo();
    }
//END CARRO-3

//CARRO-4
    if ((isset($_POST['marca3'])) and (isset($_POST['modelo3'])) and
        (isset($_POST['ano3'])) and ($_POST['marca3']!='Selecione...')) {
        $idMarca3 = $_POST['marca3'];
        $idModelo3 = $_POST['modelo3'];
        $idAno3 = $_POST['ano3'];
        $anos3 = file_get_contents("http://fipeapi.appspot.com/api/1/carros/veiculo/$idMarca3/$idModelo3/$idAno3.json");
        $anos3 = json_decode($anos3, true);
        $auto4 = $crudauto->getModelAno($idMarca3, $idModelo3, $anos3['ano_modelo']);
        $nomemodelo3 = $crud->getModelo($idModelo3);

    }else {

        $auto4 = new Veiculo();
    }
//END CARRO-4

