<html
table class="ui celled padded table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Modelo</th>
        <th>Id Montadora</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php
    if($modelos != null) {
        foreach ($modelos as $modelo): ?>
            <tr>
                <th scope="row"><?= $modelo->getIdmodelo() ?></th>
                <td><?= $modelo->getNomemodelo() ?></td>
                <td><?= $modelo->getMontadoraIdmontadora() ?></td>
                <td><a class="lic" href="?acao=editarmodelo&codigo=<?= $modelo->getIdModelo(); ?>">Editar</a> |
                    <a class="lic" href="?acao=excluirmodelo&codigo=<?= $modelo->getIdModelo(); ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach;
    }else{
        echo "<div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <div class=\"content\">
                <h2 class='teal' \">Sem Modelos existentes</h2>
            </div>";
        $modelo = new Modelo();
    }
    ?>
    </tbody>
</table>
</body>
</html>