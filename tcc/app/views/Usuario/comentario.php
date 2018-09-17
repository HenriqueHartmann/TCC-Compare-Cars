<div id="container" class="ui container">
    <div class="ui comments center aligned">
        <div class="ui center aligned header">
        <h1>Comentários</h1>
        </div>
        <form method="post" class="ui form" action="controladorUsuario.php?acao=comentar">
            <input type="hidden" name="acao" value="comentar" >
            <div class="field">
                <textarea name="comentario_campo"></textarea>
            </div>
            <button type="submit" class="ui primary submit labeled icon button" value="comentar">
                <i class="icon edit" id="comentar"> </i>comentar
            </button>

        </form>
<?php
    $comentarioo = new CrudComentario();
    $comentarios = $comentarioo->getComentarios();
    foreach ($comentarios as $comentario): ?>
<div class="ui divider"></div>
        <div class="comment">
        <a class="avatar">
            <img src="https://png.icons8.com/color/1600/avatar.png">
        </a>
        <div>
            <?php $id = $comentario->getUsuarioIdusuario() ?>
            <p><?= $comentarioo->getUsuario($id); ?></p>
            <div class="metadata">
                <p><?= $comentario->getData()?></p>
            </div>
            <div class="text">
                <p><?= $comentario->getTexto()?></p>
            </div>
            <div class="actions">
                <a class="reply"></a>
            </div>

<?php
            if (esta_logado() && e_admin()) {
?>
            <a href="controladorAdmin.php?acao=excluircomentario&codigocom=<?= $comentario->getIdcomentario() ?>" class="ui submit icon labeled red button">
                <i class="trash alternate outline icon large"></i>Excluir
            </a>
<?php
}?>
        </div>
         </div>
<!---->
<!--        <!--    <form class="ui reply form">-->
<!--        <!--        <div class="field">-->
<!--        <!--            <textarea></textarea>-->
<!--        <!--        </div>-->
<!--        <!--        <div class="ui primary submit labeled icon button">-->
<!--        <!--            <i class="icon edit" id="comentar"> </i> responder-->
<!--        <!--        </div>-->
<!--        <!--    </form>-->
<!---->
    <?php endforeach; ?>

    </div>
</div>