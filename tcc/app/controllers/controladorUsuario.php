<?php
    require_once '../models/CrudComentario.php';
    require_once '../models/CrudUsuario.php';
    require_once 'funcoes/sessao.php';

    session_start();

    if (isset($_GET['acao'])){
        $acao = $_GET['acao'];
    }else{
        $acao = 'index';
    }
    switch ($acao){

        case 'index':
            include_once "../views/Template/cabecalho.php";
            include_once "../views/Template/menu.php";
            include_once "../views/Pagina principal/index.php";
            break;

//        case 'menu decisao':
//            include_once "../views/Template/cabecalho.php";
//            include_once "";
//            include_once "../views/Usuario/decisão.php";
//            break;

        case 'pagsobre':
            include_once "../views/Template/cabecalho.php";
            include_once "../views/Template/menu.php";
            include_once "../views/Usuario/sobre.php";
            break;

        case 'pagcadastrar':
            include_once "../views/Template/cabecalho.php";
            include_once "../views/Template/menu.php";
            include_once "../views/Usuario/cadastro.php";
            break;

        case 'cadastrar':
            if (isset($_POST['nome']) and isset($_POST['email']) and isset($_POST['senha'])){
                $user = new Usuario($_POST['nome'], $_POST['email'], $_POST['senha'], 'comum');
                $usercrud = new CrudUsuario();
                if($usercrud->existeUser($user)!= 1) {
                    $usercrud->insertUsuario($user);
                    header('location: ?acao=paglogin');
                }else{
                    header('location: ?acao=pagcadastrar&erro=2');
                }
            }else{
                header('location: ?acao=pagcadastrar&erro=1');
            }
            break;

        case 'paglogin':
            include_once "../views/Template/cabecalho.php";
            include_once "../views/Template/menu.php";
            include_once "../views/Usuario/login.php";
            break;

        case 'login':
            if(isset($_POST['email']) and isset($_POST['senha'])) {
            $user = new Usuario(null, $_POST['email'], $_POST['senha'], null);
            $usercrud = new CrudUsuario();
            if ($usercrud->loginUser($user) == 1){
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $usercrud->descobreId($user);
                switch ($usercrud->verificaTipo($user)) {
                    case 'comum':
                        header('location: ?acao=index&id='.$_SESSION['id']);
                    break;

                    case 'admin':
                        $_SESSION['admin'] = true;
                        header('location: ?acao=index&id='.$_SESSION['id']);
                    break;
                }
            } else {
                header('location: controladorUsuario.php?acao=paglogin&erro=1');
            }
            }
            break;

        case 'logout':
            session_destroy();
            header('location: ?acao=index');
            break;

        case 'pagcomentar':
            include_once "../views/Template/cabecalho.php";
            include_once "../views/Template/menu.php";
            include_once "../views/Usuario/comentario.php";
            break;

        case 'comentar':
            $comentario = new Comentario(null,$_POST['comentario_campo'],null, $_SESSION['id']);
            $crud = new CrudComentario();
            $crud->insertComentario($comentario);
            header('location: controladorUsuario.php?acao=pagcomentar');

        break;

        default :
            header('location: ?acao=index');
            break;
    }