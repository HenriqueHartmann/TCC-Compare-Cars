<table class="ui celled padded table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Montadora</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php
    if($montadoras != null) {
        foreach ($montadoras as $montadora): ?>
            <tr>
                <th scope="row"><?= $montadora->getIdMontadora() ?></th>
                <td><?= $montadora->getNomeMontadora() ?></td>
                <td><a class="lic" href="?acao=editarmontadora&codigo=<?= $montadora->getIdMontadora(); ?>">Editar</a> |
                    <a class="lic" href="?acao=excluirmontadora&codigo=<?= $montadora->getIdMontadora(); ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach;
    }else{
        echo "<div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <div class=\"content\">
                <h2 class='teal' \">Sem Montadoras existentes</h2>
            </div>";
        $montadora = new Montadora();
    }
    ?>
    </tbody>
</table>
</body>
</html>