<?php

    require_once "../models/CrudModelo.php";
    require_once "../models/CrudVeiculo.php";
    require_once "../models/CrudUsuario.php";
    require_once "funcoes/comparacao.php";
    require_once "funcoes/sessao.php";
    require_once "funcoes/carro.php";

    session_start();
    $acao = $_GET['acao'];

    switch ($acao){

        case 'tabela2':
            $id1 = $auto1->getModeloIdModelo();
            $carro1 = $crud->getModelo($id1);
            $id2 = $auto2->getModeloIdModelo();
            $carro2 = $crud->getModelo($id2);
            $id3 = $auto3->getModeloIdModelo();
            $carro3 = $crud->getModelo($id3);
            $id4 = $auto4->getModeloIdModelo();
            $carro4 = $crud->getModelo($id4);

            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Comparacao/tabela2.php";
            break;

        case 'tabela3':
            $id1 = $auto1->getModeloIdModelo();
            $carro1 = $crud->getModelo($id1);
            $id2 = $auto2->getModeloIdModelo();
            $carro2 = $crud->getModelo($id2);
            $id3 = $auto3->getModeloIdModelo();
            $carro3 = $crud->getModelo($id3);
            $id4 = $auto4->getModeloIdModelo();
            $carro4 = $crud->getModelo($id4);

            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Comparacao/tabela3.php";
            break;

        case 'tabela4':
            $id1 = $auto1->getModeloIdModelo();
            $carro1 = $crud->getModelo($id1);
            $id2 = $auto2->getModeloIdModelo();
            $carro2 = $crud->getModelo($id2);
            $id3 = $auto3->getModeloIdModelo();
            $carro3 = $crud->getModelo($id3);
            $id4 = $auto4->getModeloIdModelo();
            $carro4 = $crud->getModelo($id4);

            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Comparacao/tabela4.php";
            break;

        case 'comp2':
            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Selecionar veiculo/select2.php";
            break;

        case 'comp3':
            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Selecionar veiculo/select3.php";
            break;

        case 'comp4':
            include_once "../views/Template/cabecalhoComparacao.php";
            include_once "../views/Template/menucomp.php";
            include_once "../views/Selecionar veiculo/select4.php";
            break;

        default:
            header('location: controladorUsuario.php?acao=index');
            break;
    }