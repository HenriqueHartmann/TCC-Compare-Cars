<table class="ui celled padded table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Tipo</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php
        if($usuarios != null) {
            foreach ($usuarios as $usuario): ?>
                <tr>
                    <th scope="row"><?= $usuario->getId() ?></th>
                    <td><?= $usuario->getNome() ?></td>
                    <td><?= $usuario->getEmail() ?></td>
                    <td><?= $usuario->getSenha() ?></td>
                    <td><?= $usuario->getTipuser() ?></td>
                    <td><a class="lic" href="?acao=editar&codigo=<?= $usuario->getId(); ?>">Editar</a> |
                        <a class="lic" href="?acao=excluiruser&codigo=<?= $usuario->getId(); ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach;
    }else{
            echo "<div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <div class=\"content\">
                <h2 class='teal' \">Sem Usuários existentes</h2>
            </div>";
            $usuarios = new Usuario();
        }
    ?>
    </tbody>
</table>
</body>
</html>