<?php

        require_once "../models/CrudMontadora.php";
        require_once "../models/CrudUsuario.php";
        require_once "../models/CrudVeiculo.php";
        require_once "../models/CrudComentario.php";
        require_once "../models/CrudModelo.php";
        require_once "funcoes/sessao.php";

        session_start();

        if (esta_logado() and e_admin()) {
            if (isset($_GET['acao'])) {
                $acao = $_GET['acao'];
            } else {
                $acao = 'decisao';
            }

            switch ($acao) {
                case 'decisao':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    break;

                case 'pagcomentario':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once '../views/Usuario/comentario.php';
                    break;

                case 'excluircomentario':
                    $cod = $_GET['codigocom'];
                    $comentario = new CrudComentario();
                    $comentario->deleteComentario($cod);
                    header('location: controladorAdmin.php?acao=pagcomentario');
                    break;

                case 'lista':
                    $crud = new CrudUsuario();
                    $usuarios = $crud->getUsuarios();
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once '../views/Admin/menu decisao.php';
                    include_once "../views/Admin/tabela usuario.php";
                    break;

                case 'cadastro':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/cadastraadmin.php";
                    break;

                case 'cadastrar':
                    $user = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['tipo']);
                    $usercrud = new CrudUsuario();
                    $usercrud->insertUsuario($user);
                    header('location: ?acao=lista');
                    break;

                case 'editar':
                    $usercrud = new CrudUsuario();
                    $codigo = $_GET['codigo'];
                    $usuario = $usercrud->getUsuario($codigo);
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/editaruser.php";
                    break;

                case 'updateuser':
                    $usercrud = new CrudUsuario();
                    $codigo = $_GET['codigo'];
                    $user = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['tipo'], $codigo);
                    $usercrud->updateUsuario($user);
                    header('location: ?acao=lista');
                    break;

                case 'excluiruser':
                    $codigo = $_GET['codigo'];
                    $usercrud = new CrudUsuario();
                    $usercrud->excluirUsuario($codigo);
                    header('location: ?acao=lista');
                    break;

                case 'montadoras':
                    $crud = new CrudMontadora();
                    $montadoras = $crud->getMontadoras();
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/tabela montadora.php";
                    break;

                case 'cadastromontadoras':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/cadastramontadora.php";
                    break;

                case 'cadastramontadora':
                    $montadora = new Montadora($_POST['idmontadora'], $_POST['montadora']);
                    $montadoracrud = new CrudMontadora();
                    $montadoracrud->insertMontadora($montadora);
                    header('location: ?acao=montadoras');

                    break;

                case 'editarmontadora':
                    $montcrud = new CrudMontadora();
                    $codigo = $_GET['codigo'];
                    $montadora = $montcrud->getMontadora($codigo);
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/editarmontadora.php";
                    break;

                case 'excluirmontadora':
                    $codigo = $_GET['codigo'];
                    $montadora = new CrudMontadora();
                    $montadora->deleteMontadora($codigo);
                    header('Location: ?acao=montadoras');
                    break;

                case 'modelo':
                    $crud = new CrudModelo();
                    $modelos = $crud->getModelos();
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/tabela modelo.php";
                    break;

                case 'cadastramodelo':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/cadastrarmodelo.php";
                    break;

                case 'cadastrarmodelo':
                    $modelo = new Modelo($_POST['idmodelo'],$_POST['modelo'], $_POST['idmontadora'] );
                    $crud = new CrudModelo();
                    $modelocrud = $crud->insertModelo($modelo);
                    header('location: controladorAdmin.php?acao=cadastramodelo');
                    break;

                case 'editarmodelo':
                    $modelcrud = new CrudModelo();
                    $codigo = $_GET['codigo'];
                    $modelo = $modelcrud->getModelo($codigo);
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/editarmodelo.php";
                    break;

                case 'updatemodelo':
                    $crud = new CrudModelo();
                    $codigo = $_GET['codigo'];
                    $modelo = new Modelo($_POST['idmodelo'], $_POST['modelo'], $_POST['idmontadora']);
                    $crud->updateModelo($modelo);
                    header('location: controladorAdmin.php?acao=modelo');
                    break;

                case 'excluirmodelo':
                    $codigo = $_GET['codigo'];
                    $modelo = new CrudModelo();
                    $modelo->deleteModelo($codigo);
                    header('Location: ?acao=modelo');
                    break;

                    break;

                case 'especificacao':
                    $crud = new CrudVeiculo();
                    $veiculos = $crud->getVeiculos();
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/tabela especificacao.php";
                    break;

                case 'updateespec':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/cadastraespe.php";
                    break;

                case 'cadastraespec':
                    $espec = new Veiculo($_POST['idveiculo'], $_POST['ano'], $_POST['potencia'], $_POST['portas'], $_POST['preco'], $_POST['altura'], $_POST['comprimento'], $_POST['largura'],
                        $_POST['cambio'], $_POST['velocidade'], $_POST['tanque_combustivel'], $_POST['tip_combustivel'], $_POST['porta_malas'], $_POST['tip_direcao'], $_POST['consumo_urb'], $_POST['consumo_rod'], $_POST['marcha'],
                        $_POST['tip_tracao'], $_POST['porte'], $_POST['ocupantes'], $_POST['tip_freio'], $_POST['tip_veiculo'], $_POST['idmodelo']);
                    $crud = new CrudVeiculo();
                    $especcrud = $crud->insertEspec($espec);
                    header('location: controladorAdmin.php?acao=cadastraespec');
                    break;

                case 'excluirespec':
                    $codigo = $_GET['codigo'];
                    $espec = new CrudVeiculo();
                    $espec->deleteEspec($codigo);
                    header('Location: ?acao=especificacao');
                    break;

                    break;

                case 'editarespec':
                    //terminar em casa
                    $modelcrud = new CrudModelo();
                    $codigo = $_GET['codigo'];
                    $modelo = $modelcrud->getModelo($codigo);
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/editarmodelo.php";
                    break;
            }
        }else{
            if(esta_logado()) {
                session_destroy();
            }
            header('location: controladorUsuario.php');
        }