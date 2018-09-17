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

                case 'modelos':
                    $crud = new CrudModelo();
                    $modelos = $crud->getModelos();
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/tabela modelos.php";
                    break;

                case 'cadastromontadoras':
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/cadastramontadora.php";
                    break;

                case 'editarmontadora':
                    $montcrud = new CrudMontadora();
                    $codigo = $_GET['codigo'];
                    $montadora = $montcrud->getMontadora($codigo);
                    include_once "../views/Template/cabecalhoAdmin.php";
                    include_once "../views/Admin/menu decisao.php";
                    include_once "../views/Admin/editarmontadora.php";
                    break;
            }
        }else{
            if(esta_logado()) {
                session_destroy();
            }
            header('location: controladorUsuario.php');
        }