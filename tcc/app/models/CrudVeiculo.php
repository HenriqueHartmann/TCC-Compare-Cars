<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 14/05/18
 * Time: 16:51
 */
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
}