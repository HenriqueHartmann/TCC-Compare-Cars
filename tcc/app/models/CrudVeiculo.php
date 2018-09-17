<?php

    require_once "DBConexao.php";
    require_once "Veiculo.php";
class CrudVeiculo
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = DBConexao::getConexao();
    }

    public function getMontadora($idmont){
        $sql = $this->conexao->prepare("SELECT montadora FROM montadora WHERE idmontadora=". $idmont);
        $sql->execute();
        $count = $sql->rowCount();
        try {
            return $count;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getModelo($idmod){
        $sql = $this->conexao->prepare("SELECT nome_modelo FROM modelo WHERE idmodelo=". $idmod);
        $sql->execute();
        $count = $sql->rowCount();
        try {
            return $count;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function getModelAno($idmont, $idmod, $idAno){
        $sql = "SELECT idveiculo,ano,potencia,portas,preco,altura,comprimento,largura,cambio,velocidade,tanque_combustivel,tip_combustivel,porta_malas,tip_direcao,consumo_urb,consumo_rod,marcha,tip_tracao,porte,ocupantes,tip_freio,tip_veiculo,modelo_idmodelo 
                                        FROM modelo_ano
                                        INNER JOIN modelo ON modelo_ano.modelo_idmodelo = modelo.idmodelo 
                                        INNER JOIN montadora ON modelo.montadora_idmontadora =  montadora.idmontadora
                                        WHERE modelo_ano.ano='{$idAno}' AND modelo.idmodelo='{$idmod}' AND montadora.idmontadora=". $idmont;
        $resultado = $this->conexao->query($sql);
        $auto = $resultado->fetch(PDO::FETCH_ASSOC);
        $objAuto = new Veiculo($auto['idveiculo'], $auto['ano'], $auto['potencia'], $auto['portas'], $auto['preco'], $auto['altura'], $auto['comprimento'], $auto['largura'], $auto['cambio'], $auto['velocidade'], $auto['tanque_combustivel'], $auto['tip_combustivel'], $auto['porta_malas'],
            $auto['tip_direcao'], $auto['consumo_urb'], $auto['consumo_rod'], $auto['marcha'], $auto['tip_tracao'], $auto['porte'], $auto['ocupantes'], $auto['tip_freio'], $auto['tip_veiculo'], $auto['modelo_idmodelo']);
        return $objAuto;

    }

    public function getVeiculos(){
        $sql = "SELECT * FROM modelo_ano";
        $result = $this->conexao->query($sql);
        $veiculos = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach ($veiculos as $veiculo){
            $id = $veiculo['idveiculo'];
            $ano = $veiculo['ano'];
            $potencia = $veiculo['potencia'];
            $portas = $veiculo['portas'];
            $preco = $veiculo['preco'];
            $altura = $veiculo['altura'];
            $comprimento = $veiculo['comprimento'];
            $largura = $veiculo['largura'];
            $cambio = $veiculo['cambio'];
            $velocidade = $veiculo['velocidade'];
            $tanquecomb = $veiculo['tanque_combustivel'];
            $tipcomb = $veiculo['tip_combustivel'];
            $portamalas = $veiculo['porta_malas'];
            $tipdirecao = $veiculo['tip_direcao'];
            $consumourb = $veiculo['consumo_urb'];
            $consumorod = $veiculo['consumo_rod'];
            $marcha = $veiculo['marcha'];
            $tracao = $veiculo['tip_tracao'];
            $porte = $veiculo['porte'];
            $ocupantes = $veiculo['ocupantes'];
            $freio = $veiculo['tip_freio'];
            $tipveiculo = $veiculo['tip_veiculo'];
            $idmodelo = $veiculo['modelo_idmodelo'];
            $like = $veiculo['like'];
            $dislike = $veiculo['dislike'];
            $idusuario = $veiculo['usuario_idusuario'];
            $obj = new Veiculo($id, $ano, $potencia, $portas, $preco, $altura, $comprimento, $largura, $cambio, $velocidade, $tanquecomb, $tipcomb, $portamalas, $tipdirecao, $consumourb, $consumorod,
                $marcha, $tracao, $porte, $ocupantes, $freio, $tipveiculo, $idmodelo, $like, $dislike, $idusuario);
            $listaespecificacao[] = $obj;

        }
        return $listaespecificacao;
    }

    public function getVeiculo($id){
        $sql = "SELECT * FROM modelo_ano WHERE idveiculo=".$id;
        $result = $this->conexao->query($sql);
        $espec = $result->fetch(PDO::FETCH_ASSOC);
        $id = $espec['idveiculo'];
        $ano = $espec['ano'];
        $potencia = $espec['potencia'];
        $portas = $espec['portas'];
        $preco = $espec['preco'];
        $altura = $espec['altura'];
        $comprimento = $espec['comprimento'];
        $largura = $espec['largura'];
        $cambio = $espec['cambio'];
        $velocidade = $espec['velocidade'];
        $tanquecomb = $espec['tanque_combustivel'];
        $tipcomb = $espec['tip_combustivel'];
        $portamalas = $espec['porta_malas'];
        $tipdirecao = $espec['tip_direcao'];
        $consumourb = $espec['consumo_urb'];
        $consumorod = $espec['consumo_rod'];
        $marcha = $espec['marcha'];
        $tracao = $espec['tip_tracao'];
        $porte = $espec['porte'];
        $ocupantes = $espec['ocupantes'];
        $freio = $espec['tip_freio'];
        $tipveiculo = $espec['tip_veiculo'];
        $idmodelo = $espec['modelo_idmodelo'];
        $like = $espec['like'];
        $dislike = $espec['dislike'];
        $idusuario = $espec['usuario_idusuario'];
        $obj = new Veiculo($id, $ano, $potencia, $portas, $preco, $altura, $comprimento, $largura, $cambio, $velocidade, $tanquecomb, $tipcomb, $portamalas, $tipdirecao, $consumourb, $consumorod,
            $marcha, $tracao, $porte, $ocupantes, $freio, $tipveiculo, $idmodelo, $like, $dislike, $idusuario);
        $listaespecificacao[] = $obj;

        return $listaespecificacao;
    }

    public function insertEspec(Veiculo $veiculo){
        $sql = "INSERT INTO modelo_ano(idveiculo, ano, potencia, portas, preco, altura, comprimento, largura, cambio, velocidade, tanque_combustivel, tip_combustivel, porta_malas,
            tip_direcao, consumo_urb, consumo_rod, marcha, tip_tracao, porte, ocupantes, tip_freio, tip_veiculo, modelo_idmodelo) VALUES ('{$veiculo->getIdveiculo()}',
            '{$veiculo->getAno()}', '{$veiculo->getPotencia()}', '{$veiculo->getPortas()}', '{$veiculo->getPreco()}', '{$veiculo->getAltura()}', '{$veiculo->getComprimento()}', '{$veiculo->getLargura()}',
            '{$veiculo->getCambio()}', '{$veiculo->getVelocidade()}', '{$veiculo->getTanqueCombustivel()}', '{$veiculo->getTipCombustivel()}', '{$veiculo->getPortaMalas()}', '{$veiculo->getTipDirecao()}',
            '{$veiculo->getConsumoUrb()}', '{$veiculo->getConsumoRod()}', '{$veiculo->getMarcha()}', '{$veiculo->getTipTracao()}', '{$veiculo->getPorte()}', '{$veiculo->getOcupantes()}', '{$veiculo->getTipFreio()}',
            '{$veiculo->getTipVeiculo()}', '{$veiculo->getModeloIdmodelo()}')";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function updateEspec(Veiculo $veiculo){
        $sql = "UPDATE modelo_ano SET idveiculo= '{$veiculo->getIdveiculo()}','{$veiculo->getAno()}', '{$veiculo->getPotencia()}', '{$veiculo->getPortas()}', '{$veiculo->getPreco()}', '{$veiculo->getAltura()}',
            '{$veiculo->getComprimento()}', '{$veiculo->getLargura()}', '{$veiculo->getCambio()}', '{$veiculo->getVelocidade()}', '{$veiculo->getTanqueCombustivel()}', '{$veiculo->getTipCombustivel()}',
            '{$veiculo->getPortaMalas()}', '{$veiculo->getTipDirecao()}', '{$veiculo->getConsumoUrb()}', '{$veiculo->getConsumoRod()}', '{$veiculo->getMarcha()}', '{$veiculo->getTipTracao()}', '{$veiculo->getPorte()}',
            '{$veiculo->getOcupantes()}', '{$veiculo->getTipFreio()}', '{$veiculo->getTipVeiculo()}', '{$veiculo->getModeloIdmodelo()}'";
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }


    public function deleteEspec($id){
        $sql = "DELETE FROM modelo_ano WHERE idveiculo=".$id;
        try{
            $this->conexao->exec($sql);
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}