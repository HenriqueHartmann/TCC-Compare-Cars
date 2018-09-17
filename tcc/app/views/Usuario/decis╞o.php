<div style="background-color: #24292e;">
    <div style="background-color: #24292e;" class="ui large stackable menu">
        <h3 style="color: #f40612" class="item header">VERSUS</h3>
        <div class="ui item search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Procure um modelo...">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>

        <div class="right menu">
            <a style="<?=($_GET['acao'] == 'index') ? 'color: #f40612!important;' : ''?>" class="ui item" href="controladorUsuario.php?acao=index<?php if(isset($_SESSION['id'])){echo "&user".$_SESSION['id'];} ?>">Início</a>
            <?php

            if (!esta_logado()){?>
                <a style="<?=($_GET['acaoi'] == 'login') ? 'color: #f40612!important;' : ''?>" class="ui item" href="?acaoi=login">Logar</a>
                <a style="<?=($_GET['acaoi'] == 'cadastrar') ? 'color: #f40612!important;' : ''?>" class="ui item" href="?acaoi=cadastrar">Cadastrar</a>
                <a style="<?=($_GET['acaoi'] == 'sobre') ? 'color: #f40612!important;' : ''?>" class="ui item" href="?acaoi=sobre">Sobre e Contatos</a>
            <?php }

            if (esta_logado()){?>
                <!--                <a class="item" href="#">Perfil</a>-->
                <a style="<?=($_GET['acaoi'] == 'comentario') ? 'color: #f40612!important;' : '' ?>" class="ui item" href="?acaoi=comentario&user=&user=<?= $_SESSION['id'] ?>">Comentários</a>
                <a class="ui item" href="?acao=logout">Logout</a>
                <?php
                if (e_admin()){?>
                    <a class="ui item" href="controladorAdmin.php?acao=decisao">Admin</a>
                <?php }
            } ?>
        </div>
    </div>
</div>

<div class="pusher">
<?php
if (!esta_logado() and isset($_GET['acaoi']) and $_GET['acaoi'] == 'login') {
    include_once "../views/Usuario/login.php";
}elseif (!esta_logado() and isset($_GET['acaoi']) and $_GET['acaoi'] == 'cadastrar'){
    include_once "../views/Usuario/cadastro.php";
}elseif (isset($_GET['acaoi']) and $_GET['acaoi'] == 'sobre') {
    include_once "../views/Usuario/sobre.php";
}elseif (isset($_GET['acaoi']) and $_GET['acaoi'] == 'comentario') {
    include_once "../views/Usuario/comentario.php";
}elseif (!isset($_GET['acaoi'])) {
    include_once "../views/Selecionar veiculo/select4.php";
}
?>
</div>