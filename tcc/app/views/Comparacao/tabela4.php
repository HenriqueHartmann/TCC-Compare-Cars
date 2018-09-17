<div id="tabela">
    <table class="ui small green table">
        <thead>
        <tr>
            <th>Nome Carro </th>
            <th><?= $carro1->getNomemodelo() ?></th>
            <th><?= $carro2->getNomemodelo() ?></th>
            <th><?= $carro3->getNomemodelo() ?></th>
            <th><?= $carro4->getNomemodelo() ?></th>
        </tr>
        <tr>
            <th>ID</th>
            <th><?= $auto1->getIdveiculo(); ?></th>
            <th><?= $auto2->getIdveiculo(); ?></th>
            <th><?= $auto3->getIdveiculo(); ?></th>
            <th><?= $auto4->getIdveiculo(); ?></th>
        </tr>
        <tr>

            <!--            ANO-->
            <th>Ano</th>

            <?php $melhorAno = ano($auto1->getAno(), $auto2->getAno(), $auto3->getAno(), $auto4->getAno()); ?>

            <th><i id="ano1" class="<?= ($auto1->getAno() == $melhorAno) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getAno(); ?> </th>
            <th><i id="ano2" class="<?= ($auto2->getAno() == $melhorAno) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getAno(); ?> </th>
            <th><i id="ano3" class="<?= ($auto3->getAno() == $melhorAno) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getAno(); ?> </th>
            <th><i id="ano4" class="<?= ($auto4->getAno() == $melhorAno) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getAno(); ?> </th>
        </tr>
        <tr>


            <!--           POTENCIA-->
            <th>Potencia</th>

            <?php $melhorPot = potencia($auto1->getPotencia(), $auto2->getPotencia(), $auto3->getPotencia(), $auto4->getPotencia());
            $pot1 = substr($auto1->getPotencia(), 10, 4);
            $pot2 = substr($auto2->getPotencia(), 10, 4);
            $pot3 = substr($auto3->getPotencia(), 10, 4);
            $pot4 = substr($auto4->getPotencia(), 10, 4);
            ?>

            <th><i id="pot1" class="<?= ($pot1 == $melhorPot) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getPotencia(); ?> </th>
            <th><i id="pot2" class="<?= ($pot2 == $melhorPot) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getPotencia(); ?> </th>
            <th><i id="pot3" class="<?= ($pot3 == $melhorPot) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getPotencia(); ?> </th>
            <th><i id="pot4" class="<?= ($pot4 == $melhorPot) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getPotencia(); ?> </th>
        </tr>
        <tr>


            <th>Portas</th>

            <?php $melhorPort = portas($auto1->getPortas(), $auto2->getPortas(), $auto3->getPortas(), $auto4->getPortas());
            $port1 = substr($auto1->getPortas(), 0, 1);
            $port2 = substr($auto2->getPortas(), 0, 1);
            $port3 = substr($auto3->getPortas(), 0, 1);
            $port4 = substr($auto4->getPortas(), 0, 1);
            ?>

            <th><i id="port1" class="<?= ($port1 == $melhorPort) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getPortas(); ?> </th>
            <th><i id="port2" class="<?= ($port2 == $melhorPort) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getPortas(); ?> </th>
            <th><i id="port3" class="<?= ($port3 == $melhorPort) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getPortas(); ?> </th>
            <th><i id="port4" class="<?= ($port4 == $melhorPort) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getPortas(); ?> </th>
        </tr>
        <tr>


            <th>Preco</th>

            <?php $melhorPreco = preco4($auto1->getPreco(), $auto2->getPreco(), $auto3->getPreco(), $auto4->getPreco());
            $preco1 = substr($auto1->getPreco(), 3,15);
            $preco2 = substr($auto2->getPreco(), 3,15);
            $preco3 = substr($auto3->getPreco(), 3,15);
            $preco4 = substr($auto4->getPreco(), 3,15);
            ?>

            <th><i id="preco1" class="<?= ($preco1 == $melhorPreco) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getPreco(); ?> </th>
            <th><i id="preco2" class="<?= ($preco2 == $melhorPreco) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getPreco(); ?> </th>
            <th><i id="preco3" class="<?= ($preco3 == $melhorPreco) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getPreco(); ?> </th>
            <th><i id="preco4" class="<?= ($preco4 == $melhorPreco) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getPreco(); ?> </th>
        </tr>
        <tr>
            <th>Altura</th>

            <?php $melhorAlt = altura($auto1->getAltura(), $auto2->getAltura(), $auto3->getAltura(), $auto4->getAltura());
            $alt1 = substr($auto1->getAltura(), 0,4);
            $alt2 = substr($auto2->getAltura(), 0,4);
            $alt3 = substr($auto3->getAltura(), 0,4);
            $alt4 = substr($auto4->getAltura(), 0,4);
            ?>

            <th><i id="alt1" class="<?= ($alt1 == $melhorAlt) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getAltura(); ?> </th>
            <th><i id="alt2" class="<?= ($alt2 == $melhorAlt) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getAltura(); ?> </th>
            <th><i id="alt3" class="<?= ($alt3 == $melhorAlt) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getAltura(); ?> </th>
            <th><i id="alt4" class="<?= ($alt4 == $melhorAlt) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getAltura(); ?> </th>
        </tr>
        <tr>
            <th>Comprimento</th>

            <?php $melhorCom = comprimento($auto1->getComprimento(), $auto2->getComprimento(), $auto3->getComprimento(), $auto4->getComprimento());
            $com1 = substr($auto1->getComprimento(), 0,4);
            $com2 = substr($auto2->getComprimento(), 0,4);
            $com3 = substr($auto3->getComprimento(), 0,4);
            $com4 = substr($auto4->getComprimento(), 0,4);
            ?>

            <th><i id="com1" class="<?= ($com1 == $melhorCom) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getComprimento(); ?> </th>
            <th><i id="com2" class="<?= ($com2 == $melhorCom) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getComprimento(); ?> </th>
            <th><i id="com3" class="<?= ($com3 == $melhorCom) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getComprimento(); ?> </th>
            <th><i id="com4" class="<?= ($com4 == $melhorCom) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getComprimento(); ?> </th>
        </tr>
        <tr>


            <th>Largura</th>

            <?php $melhorLar = largura($auto1->getLargura(), $auto2->getLargura(), $auto3->getLargura(), $auto4->getLargura());
            $lar1 = substr($auto1->getLargura(), 0,4);
            $lar2 = substr($auto2->getLargura(), 0,4);
            $lar3 = substr($auto3->getLargura(), 0,4);
            $lar4 = substr($auto4->getLargura(), 0,4);
            ?>

            <th><i id="lar1" class="<?= ($lar1 == $melhorLar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getLargura(); ?> </th>
            <th><i id="lar2" class="<?= ($lar2 == $melhorLar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getLargura(); ?> </th>
            <th><i id="lar3" class="<?= ($lar3 == $melhorLar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getLargura(); ?> </th>
            <th><i id="lar4" class="<?= ($lar4 == $melhorLar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getLargura(); ?> </th>
        </tr>
        <tr>
            <th>Velocidade</th>

            <?php $melhorVel = velocidade($auto1->getVelocidade(), $auto2->getVelocidade(), $auto3->getVelocidade(), $auto4->getvelocidade());

            $vel1 = substr($auto1->getVelocidade(), 0, 3);
            $vel2 = substr($auto2->getVelocidade(), 0, 3);
            $vel3 = substr($auto3->getVelocidade(), 0, 3);
            $vel4 = substr($auto4->getVelocidade(), 0, 3);

            ?>

            <th><i id="vel1" class="<?= ($vel1 == $melhorVel) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getVelocidade(); ?> </th>
            <th><i id="vel2" class="<?= ($vel2 == $melhorVel) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getVelocidade(); ?> </th>
            <th><i id="vel3" class="<?= ($vel3 == $melhorVel) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getVelocidade(); ?> </th>
            <th><i id="vel4" class="<?= ($vel4 == $melhorVel) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getVelocidade(); ?> </th>
        </tr>
        <tr>
            <th>Tanque combustivel</th>

            <?php $melhorTqc = tq_combustivel($auto1->getTanqueCombustivel(), $auto2->getTanqueCombustivel(), $auto3->getTanqueCombustivel(), $auto4->getTanqueCombustivel());

            $tqc1 = substr($auto1->getTanqueCombustivel(), 0, 2);
            $tqc2 = substr($auto2->getTanqueCombustivel(), 0, 2);
            $tqc3 = substr($auto3->getTanqueCombustivel(), 0, 2);
            $tqc4 = substr($auto4->getTanqueCombustivel(), 0, 2);

            ?>

            <th><i id="tqc1" class="<?= ($tqc1 == $melhorTqc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getTanqueCombustivel(); ?> </th>
            <th><i id="tqc2" class="<?= ($tqc2 == $melhorTqc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getTanqueCombustivel(); ?> </th>
            <th><i id="tqc3" class="<?= ($tqc3 == $melhorTqc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getTanqueCombustivel(); ?> </th>
            <th><i id="tqc4" class="<?= ($tqc4 == $melhorTqc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getTanqueCombustivel(); ?> </th>
        </tr>
        <tr>
            <th>Tipo de direção</th>
            <?php $melhorDir = direcao($auto1->getTipDirecao(), $auto2->getTipDirecao(), $auto3->getTipDirecao(), $auto4->getTipDirecao());

            $d1 = $auto1->getTipDirecao();
            $d2 = $auto2->getTipDirecao();
            $d3 = $auto3->getTipDirecao();
            $d4 = $auto4->getTipDirecao();

            ?>

            <th><i id="d1" class="<?= ($d1 == $melhorDir) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getTipDirecao(); ?> </th>
            <th><i id="d2" class="<?= ($d2 == $melhorDir) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getTipDirecao(); ?> </th>
            <th><i id="d3" class="<?= ($d3 == $melhorDir) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getTipDirecao(); ?> </th>
            <th><i id="d4" class="<?= ($d4 == $melhorDir) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getTipDirecao(); ?> </th>

        </tr>
        <tr>
            <th>Tipo combustivel</th>
            <?php $melhorTpc = tp_combustivel($auto1->getTipCombustivel(), $auto2->getTipCombustivel(), $auto3->getTipCombustivel(), $auto4->getTipCombustivel());

            $tpc1 = $auto1->getTipCombustivel();
            $tpc2 = $auto2->getTipCombustivel();
            $tpc3 = $auto3->getTipCombustivel();
            $tpc4 = $auto4->getTipCombustivel();

            ?>

            <th><i id="tpc1" class="<?= ($tpc1 == $melhorTpc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getTipCombustivel(); ?> </th>
            <th><i id="tpc2" class="<?= ($tpc2 == $melhorTpc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getTipCombustivel(); ?> </th>
            <th><i id="tpc3" class="<?= ($tpc3 == $melhorTpc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getTipCombustivel(); ?> </th>
            <th><i id="tpc4" class="<?= ($tpc4 == $melhorTpc) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getTipCombustivel(); ?> </th>

        </tr>
        <tr>
            <th>Porta malas</th>
            <?php $melhorPor = portaMalas($auto1->getPortaMalas(), $auto2->getPortaMalas(), $auto3->getPortaMalas(), $auto4->getPortaMalas());

            $por1 = substr($auto1->getPortaMalas(), 0, 3);
            $por2 = substr($auto2->getPortaMalas(), 0, 3);
            $por3 = substr($auto3->getPortaMalas(), 0, 3);
            $por4 = substr($auto4->getPortaMalas(), 0, 3);

            ?>

            <th><i id="por1" class="<?= ($por1 == $melhorPor) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getPortaMalas(); ?> </th>
            <th><i id="por2" class="<?= ($por2 == $melhorPor) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getPortaMalas(); ?> </th>
            <th><i id="por3" class="<?= ($por3 == $melhorPor) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getPortaMalas(); ?> </th>
            <th><i id="por4" class="<?= ($por4 == $melhorPor) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getPortaMalas(); ?> </th>
        </tr>

        <tr>
            <th>Consumo urbano</th>
            <?php $melhorConu = consumoUrb($auto1->getConsumoUrb(), $auto2->getConsumoUrb(), $auto3->getConsumoUrb(), $auto4->getConsumoUrb());

            $conu1 = substr($auto1->getConsumoUrb(), 11, 3);
            $conu2 = substr($auto2->getConsumoUrb(), 11, 3);
            $conu3 = substr($auto3->getConsumoUrb(), 11, 3);
            $conu4 = substr($auto4->getConsumoUrb(), 11, 3);

            ?>

            <th><i id="con1" class="<?= ($conu1 == $melhorConu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getConsumoUrb(); ?> </th>
            <th><i id="con2" class="<?= ($conu2 == $melhorConu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getConsumoUrb(); ?> </th>
            <th><i id="con3" class="<?= ($conu3 == $melhorConu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getConsumoUrb(); ?> </th>
            <th><i id="con4" class="<?= ($conu4 == $melhorConu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getConsumoUrb(); ?> </th>
        </tr>
        <tr>
            <th>Consumo rodoviario</th>
            <?php $melhorConr = consumoRod($auto1->getConsumoRod(), $auto2->getConsumoRod(), $auto3->getConsumoRod(), $auto4->getConsumoRod());

            $conr1 = substr($auto1->getConsumoRod(), 13, 3);
            $conr2 = substr($auto2->getConsumoRod(), 13, 3);
            $conr3 = substr($auto3->getConsumoRod(), 13, 3);
            $conr4 = substr($auto4->getConsumoRod(), 13, 3);

            ?>

            <th><i id="rod1" class="<?= ($conr1 == $melhorConr) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getConsumoRod(); ?> </th>
            <th><i id="rod2" class="<?= ($conr2 == $melhorConr) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getConsumoRod(); ?> </th>
            <th><i id="rod3" class="<?= ($conr3 == $melhorConr) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getConsumoRod(); ?> </th>
            <th><i id="rod4" class="<?= ($conr4 == $melhorConr) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getConsumoRod(); ?> </th>
        </tr>
        <tr>
            <th>Marcha</th>
            <?php $melhorMar = marchas($auto1->getMarcha(), $auto2->getMarcha(), $auto3->getMarcha(), $auto4->getMarcha());

            $mar1 = substr($auto1->getMarcha(), 0, 1);
            $mar2 = substr($auto2->getMarcha(), 0, 1);
            $mar3 = substr($auto3->getMarcha(), 0, 1);
            $mar4 = substr($auto4->getMarcha(), 0, 1);

            ?>

            <th><i id="mar1" class="<?= ($mar1 == $melhorMar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getMarcha(); ?> </th>
            <th><i id="mar2" class="<?= ($mar2 == $melhorMar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getMarcha(); ?> </th>
            <th><i id="mar3" class="<?= ($mar3 == $melhorMar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getMarcha(); ?> </th>
            <th><i id="mar4" class="<?= ($mar4 == $melhorMar) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getMarcha(); ?> </th>
        </tr>
        <tr>
            <th>Ocupantes</th>
            <?php $melhorOcu = ocupante($auto1->getOcupantes(), $auto2->getOcupantes(), $auto3->getOcupantes(), $auto4->getOcupantes());

            $ocu1 = substr($auto1->getOcupantes(), 0, 1);
            $ocu2 = substr($auto2->getOcupantes(), 0, 1);
            $ocu3 = substr($auto3->getOcupantes(), 0, 1);
            $ocu4 = substr($auto4->getOcupantes(), 0, 1);

            ?>

            <th><i id="ocu1" class="<?= ($ocu1 == $melhorOcu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto1->getOcupantes(); ?> </th>
            <th><i id="ocu2" class="<?= ($ocu2 == $melhorOcu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto2->getOcupantes(); ?> </th>
            <th><i id="ocu3" class="<?= ($ocu3 == $melhorOcu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto3->getOcupantes(); ?> </th>
            <th><i id="ocu4" class="<?= ($ocu4 == $melhorOcu) ? "large green checkmark icon" : "large red close icon"; ?>"></i><?= $auto4->getOcupantes(); ?> </th>
        </tr>
        <tr>
            <th>Câmbio</th>

            <th><i id="cam1"></i><?= $auto1->getCambio(); ?></th>
            <th><i id="cam2"></i><?= $auto2->getCambio(); ?> </th>
            <th><i id="cam3"></i><?= $auto3->getCambio(); ?> </th>
            <th><i id="cam4"></i><?= $auto4->getCambio(); ?> </th>
        </tr>
        <tr>
            <th>Tipo de freio</th>
            <th><i id="tipF1"></i><?= $auto1->getTipFreio(); ?></th>
            <th><i id="tipF2"></i><?= $auto2->getTipFreio(); ?> </th>
            <th><i id="tipF3"></i><?= $auto3->getTipFreio(); ?> </th>
            <th><i id="tipF4"></i><?= $auto4->getTipFreio(); ?> </th>
        </tr>
        <tr>
            <th>Tipo do veiculo</th>
            <th><i id="tipV1"></i><?= $auto1->getTipVeiculo(); ?></th>
            <th><i id="tipV2"></i><?= $auto2->getTipVeiculo(); ?> </th>
            <th><i id="tipV3"></i><?= $auto3->getTipVeiculo(); ?> </th>
            <th><i id="tipV4"></i><?= $auto4->getTipVeiculo(); ?> </th>
        </tr>
        <tr>
            <th>Tipo de tração</th>
            <th><i id="tipT1"></i><?= $auto1->getTipTracao(); ?></th>
            <th><i id="tipT2"></i><?= $auto2->getTipTracao(); ?> </th>
            <th><i id="tipT3"></i><?= $auto3->getTipTracao(); ?> </th>
            <th><i id="tipT4"></i><?= $auto4->getTipTracao(); ?> </th>
        </tr>
        <tr>
            <th>Porte</th>
            <th><i id="porte1"></i><?= $auto1->getPorte(); ?></th>
            <th><i id="porte2"></i><?= $auto2->getPorte(); ?> </th>
            <th><i id="porte3"></i><?= $auto3->getPorte(); ?> </th>
            <th><i id="porte4"></i><?= $auto4->getPorte(); ?> </th>
        </tr>
        </thead>
    </table>
</div>