<table class="ui celled padded table">
    <thead>
    <td>
    <th>Id</th>
    <th>Ano</th>
    <th>Potência</th>
    <th>Portas</th>
    <th>Preço</th>
    <th>Altura</th>
    <th>comprimento</th>
    <th>Largura</th>
    <th>Cambio</th>
    <th>Velocidade</th>
    <th>Tanque de combustivel</th>
    <th>Tipo combustivel</th>
    <th>Porta malas</th>
    <th>Direção</th>
    <th>Consumo Urb</th>
    <th>Consumo Rod</th>
    <th>Marcha</th>
    <th>Tração</th>
    <th>Porte</th>
    <th>Ocupantes</th>
    <th>Freio</th>
    <th>Tipo de veiculo</th>
    <th>Ações</th>

    </td>
    </thead>
    <tbody>
    <?php

    if($veiculos != null) {
        foreach ($veiculos as $veiculo): ?>
            <tr>
                <!--                colocar os get de especificações-->
                <th scope="row"><?= $veiculo->getIdveiculo() ?></th>
                <td><?= $veiculo->getAno() ?></td>
                <td><?= $veiculo->getPotencia() ?></td>
                <td><?= $veiculo->getPortas() ?></td>
                <td><?= $veiculo->getPreco() ?></td>
                <td><?= $veiculo->getAltura() ?></td>
                <td><?= $veiculo->getComprimento() ?></td>
                <td><?= $veiculo->getLargura() ?></td>
                <td><?= $veiculo->getCambio() ?></td>
                <td><?= $veiculo->getVelocidade() ?></td>
                <td><?= $veiculo->getTanqueCombustivel() ?></td>
                <td><?= $veiculo->getTipCombustivel() ?></td>
                <td><?= $veiculo->getPortaMalas() ?></td>
                <td><?= $veiculo->getTipDirecao() ?></td>
                <td><?= $veiculo->getConsumoUrb() ?></td>
                <td><?= $veiculo->getConsumoRod() ?></td>
                <td><?= $veiculo->getMarcha() ?></td>
                <td><?= $veiculo->getTipTracao() ?></td>
                <td><?= $veiculo->getPorte() ?></td>
                <td><?= $veiculo->getOcupantes() ?></td>
                <td><?= $veiculo->getTipFreio() ?></td>
                <td><?= $veiculo->getTipVeiculo() ?></td>
                <td><?= $veiculo->getModeloIdModelo() ?></td>
                <td><?= $veiculo->getlike() ?></td>
                <td><?= $veiculo->getdislike() ?></td>
                <td><?= $veiculo->getUsuarioIdusuario() ?></td>
                <td><a class="lic" href="?acao=editarespec=<?= $veiculo->getIdveiculo(); ?>">Editar</a> |
                    <a class="lic" href="?acao=excluirespec=<?= $veiculo->getIdveiculo(); ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach;
    }else{
        echo "<div class=\"ui middle aligned center aligned grid\">
        <div class=\"column\">
            <div class=\"content\">
                <h2 class='teal' \">Sem Veiculos existentes</h2>
            </div>";
        $veiculo = new Veiculo();
    }
    ?>
    </tbody>
</table>
</body>
</html>
