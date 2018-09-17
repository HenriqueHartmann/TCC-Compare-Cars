<div class="ui large menu stackable">
    <h3 style="color: #f40612" class="item header">VERSUS</h3>
    <a id="jo" class="item" href="controladorUsuario.php?acao=index">Início</a>
    <?php
    if(!esta_logado()){?>
        <a id="jo" class="item" href="controladorUsuario.php?acao=pagcadastrar">Cadastrar</a>
        <a id="jo" class="item" href="controladorUsuario.php?acao=paglogin">Login</a>
        <a id="jo" class="item" href="controladorUsuario.php?acao=pagsobre">Sobre</a>
        <?php
    }
    if(esta_logado()){?>
        <a id="jo" class="item" href="?acaoi=comentario&user=&user=<?= $_SESSION['id'] ?>">Comentários</a>
        <a id="jo" class="item" href="controladorUsuario.php?acao=logout">Logout</a>
        <?php
        if (e_admin()){?>
            <a id="jo" class="ui item" href="controladorAdmin.php?acao=decisao">Admin</a>
            <?php
        }
    }?>
</div>